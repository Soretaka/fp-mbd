<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared(
            '
            CREATE OR REPLACE FUNCTION countLolos ( ujianID INT )
            RETURNS INT
            
            BEGIN
            
               DECLARE count INT;
            
               SET count = 0;
               
               SET count = (SELECT count(*) from pelajar_ujians pu
                            where pu.ujian_id = ujianID and pu.status = 1);
            
               RETURN count;
            
            END;'
        );

        DB::unprepared(
            '
            CREATE OR REPLACE FUNCTION countForPengajar ( pengajarID INT )
            RETURNS INT

            BEGIN

            DECLARE count INT;

            SET count = 0;
            
            SET count = (SELECT count(*) from soals s
                            where s.pengajar_id = pengajarID);

            RETURN count;

            END;
            '
        );

        DB::unprepared(
            "
            CREATE OR REPLACE VIEW Data_Ujian
            AS
            SELECT u.id, u.nama as 'Nama Ujian', count(s.ujian_id) as 'Jumlah Soal Ujian', c.Total_Pelajar as 'Total Pelajar'
            FROM ujians as u 
            JOIN soals as s ON u.id = s.ujian_id
            JOIN 
            (
                select u.id as 'ujian_id', count(p.pelajar_id) as 'Total_Pelajar'
                from pelajar_ujians as p 
                JOIN ujians as u ON u.id = p.ujian_id
                GROUP BY u.id
            ) as c ON c.ujian_id = u.id
            GROUP BY u.id;
            "
        );

        DB::unprepared(
            "
            CREATE OR REPLACE PROCEDURE stalkPeserta (pesertaID INT)
            BEGIN
                SELECT p.nama, p.tanggal_lahir, p.tempat_lahir, p.kelas, p.jenis_kelamin
                from pelajars as p
                WHERE p.id = pesertaID;
            END;
            "
        );

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE lihatHistoryOrang (pesertaID INT)
        BEGIN
         SELECT u.id, u.nama, pu.nilai, pu.status
            from ujians as u
            JOIN pelajar_ujians as pu ON u.id = pu.ujian_id
            WHERE pu.pelajar_id = pesertaID;
        END;
        ");

        DB::unprepared("
        CREATE OR REPLACE VIEW Nilai_Ujian
        AS
        SELECT pu.nilai as 'Nilai Ujian', p.nama
        FROM pelajar_ujians as pu
        JOIN pelajars as p ON p.id=pu.pelajar_id
        ");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION countPesertaUjian ( ujianID INT )
        RETURNS INT
        
        BEGIN
        
           DECLARE count INT;
        
           SET count = 0;
           
           SET count = (SELECT count(*) from pelajar_ujians pu
                        where pu.ujian_id = ujianID);
        
           RETURN count;
        
        END;
        ");


        DB::unprepared("
        CREATE OR REPLACE PROCEDURE pengajarperpelajaran(idpelajaran int )
        BEGIN
           SELECT p.nama FROM pengajar_pelajars pp
        JOIN pengajars p ON p.id = pp.pengajar_id
           WHERE pp.pelajaran_id = idpelajaran;
        END
        ");

        DB::unprepared("
        CREATE OR REPLACE VIEW viewPelajaran AS
        SELECT p.nama as Nama, p.bab AS Bab
        FROM pelajarans p;
        ");

        DB::unprepared("
        create or REPLACE view viewPelajar as
        select pe.nama as Nama, pe.kelas as Kelas, pe.jenis_kelamin as 'Jenis Kelamin'
        from pelajars as pe;
        ");

        DB::unprepared("
        CREATE OR REPLACE TRIGGER statusTrigger
        BEFORE INSERT ON pelajar_ujians
        FOR EACH ROW
        BEGIN
         DECLARE kkmUjian INT;
            SET kkmUjian = (SELECT kkm FROM ujians u WHERE u.id = NEW.ujian_id);
         IF NEW.nilai >= kkmUjian THEN
             SET NEW.status = 1;
            ELSE
             SET NEW.status = 0;
            END IF;
        END
        ");

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE perbaiki_status(id INT, kkm INT)
        BEGIN
         UPDATE pelajar_ujians
              SET pelajar_ujians.status = if(pelajar_ujians.nilai < kkm,0,if(pelajar_ujians.nilai>kkm,1,pelajar_ujians.status))
                 where pelajar_ujians.ujian_id = id;
        END;
        ");

        DB::unprepared("
        CREATE OR REPLACE TRIGGER kkmTrigger
        BEFORE UPDATE ON ujians FOR EACH ROW
        BEGIN
         CALL perbaiki_status(old.id, new.kkm);
        END;
        ");

        DB::unprepared("
        CREATE OR REPLACE TRIGGER nilaiTrigger
        BEFORE INSERT ON pelajar_ujians
        FOR EACH ROW
        BEGIN
        DECLARE banyak_soal INT;
        SET banyak_soal = ( SELECT count(s.ujian_id) from ujians as u join soals as s on u.id = s.ujian_id where s.ujian_id = NEW.ujian_id);
        if(NEW.benar > banyak_soal) THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Benar lebih banyak daripada banyak soal pada ujian'; 
        else
        SET new.nilai = new.benar/banyak_soal * 100;
        end if;
        END
        ");

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE lihatUjianPelajaran(namaPelajaran VARCHAR(255))
        BEGIN
         SELECT p.nama as 'Pelajaran', p.bab, u.nama as 'Ujian'
         FROM ujians as u
         JOIN pelajarans as p ON u.pelajaran_id=p.id
         WHERE p.nama=namaPelajaran COLLATE utf8mb4_general_ci
         ORDER BY p.bab;
        END;
        ");

        DB::unprepared("
        create or replace view ranking as
        select  p.nama as pelajar, pu.nilai as nilai, u.nama as 'nama ujian', dense_rank() over(partition by u.id order by pu.nilai desc ) as Ranks
        from pelajar_ujians pu join ujians u on u.id = pu.ujian_id
        join pelajars p on p.id = pu.pelajar_id
        where ujian_id is not null 
        order by u.id, pu.nilai desc;
        ");

        DB::unprepared("
        create or replace function countSoalPelajaran (pelajaranID INT)
        returns INT
        
        begin
         declare count INT;
            set count = 0;
            set count = (select count(*) from soals s 
            where s.pelajaran_id = pelajaranID);
            return count;
        end;
        ");

        DB::unprepared("
        CREATE OR REPLACE VIEW viewsoal 
        AS 
        SELECT s.deskripsi, s.a, s.b, s.c, s.d
        FROM soals s;
        ");

        DB::unprepared("
        CREATE OR REPLACE VIEW viewpengajar 
        AS 
        SELECT DISTINCT pg.nama AS 'Nama Pengajar', p.nama AS 'pelajaran', p.bab
        FROM pengajars AS pg
        JOIN pengajar_pelajars AS pp ON pg.id = pp.pengajar_id
        JOIN pelajarans AS p ON pp.pelajaran_id = p.id
        ");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION nilaiTotal(pelajarID INT) 
        RETURNS INT 
        BEGIN
            DECLARE
                total_nilai INT;
            SET
                total_nilai = 0;
            SET
                total_nilai =(
                SELECT
                    p.nama,
                    SUM(pu.nilai)
                FROM
                    pelajar_ujians pu
                JOIN pelajars p ON
                    pu.pelajar_id = p.id
                WHERE
                    pu.pelajar_id = pelajarID
                GROUP BY
                    p.nama
            ); 
            RETURN total_nilai;
        END;
        ");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION countForUjian(ujianID INT) 
        RETURNS INT 
        BEGIN
            DECLARE
                count_ujian INT ;
            SET
                count_ujian = 0 ;
            SET
                count_ujian =(
                SELECT
                    COUNT(*)
                FROM
                    soals s
                WHERE
                    s.ujian_id = ujianID
            ) ; RETURN count_ujian ;
        END ;
        ");

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE soalperpelajaran(pelajaranID int )
        BEGIN
           SELECT s.deskripsi, s.jawaban
           FROM soals s JOIN pelajarans p ON s.pelajaran_id = p.id
           WHERE p.id = pelajaranID;
        END;
        ");

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE pelajarTiapUjian(pelajarID int )
        BEGIN
              SELECT p.nama, p.kelas, u.nama
              FROM pelajar_ujians pu join pelajars p on p.id= pu.pelajar_id JOIN ujians u ON u.ujian_id = u.id
              WHERE p.id = pelajarID;
           END;
        ");

        DB::unprepared("
        CREATE OR REPLACE PROCEDURE rankingTiapUjian(ujianID INT)

        BEGIN
         SELECT p.nama as pelajar, pu.nilai as nilai, u.nama as 'nama ujian', dense_rank() over(partition by u.id order by pu.nilai desc ) as rank
            from pelajar_ujians pu join ujians u on u.id = pu.ujian_id
            join pelajars p on p.id = pu.pelajar_id
        where pu.ujian_id = ujianID 
        order by pu.nilai desc;
        
        END;
        ");
        
        DB::unprepared("
        CREATE OR REPLACE FUNCTION countPesertaKelas ( tingkatKelas INT )
                RETURNS INT
                
                BEGIN
                
                   DECLARE totalOrang INT;
                
                   SET totalOrang = 0;
                   
                   SET totalOrang = (SELECT count(*) from pelajars as p
                                where p.kelas=tingkatKelas);
                
                   RETURN totalOrang;
                
        END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
