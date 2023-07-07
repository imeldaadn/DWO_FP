# FP_DWO_A_KEL2
Final Project DWO OLAP dan Dashboard Paralel A - KEL 2

Untuk dapat menjalankan program FP_DWO_A_KEL2, ikuti langkah berikut :
1. Install database server: MySql (XAMPP versi terbaru).
2. Install software mysql management: phpMyAdmin dari XAMPP (atau lainnya).
3. Extract FP_DWO_A_KEL2.zip pada folder direktori htdocs XAMPP (xampp/htdocs).
4. Jalankan XAMPP Control Panel.
5. Start apache, mysql server, dan tomcat.
6. Buka phpmyadmin melalui browser di http://localhost/phpmyadmin
7. Buat database dengan nama adventureworks.
8. Import file AWBackup.sql dalam folder 'datawarehouse sql' ke dalam database adventureworks.
9. Buat juga database dengan nama dw_production dan dw_sales lalu import file sql di folder 'datawarehouse sql' ke dalamnya
10. Pindahkan file dwoadw1 dan dwoadw2 berformat jsp dan xml yang ada pada folder 'mondrian' di FP_DWO_A_KEL2 kedalam folder -> C:\xampp\tomcat\webapps\mondrian\WEB-INF\queries.
11. Jalankan aplikasi dengan mengakses http://localhost/FP_DWO_A_KEL2
