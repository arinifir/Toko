# ALUR KERJA APLIKASI
**Korean Food** adalah aplikasi berbasis web untuk mempromosikan makanan dan minuman yang dijual. Cara memakai aplikasi ini adalah:
1.	Clone repository Toko pada link github ini: https://github.com/arinifir/Toko
2.	Kemudian import database di folder database dengan nama db_toko.sql
3.	Dan buka web dengan link http://localhost/Toko/
### Halaman Menu
adalah halaman awal dari web tersebut. Di halaman ini, kita bisa melihat menu-menu yang ada berdasarkan jenisnya yaitu makanan, minuman, atau lainnya. Klik **lihat** pada salah satu menu. Jika klik minuman maka menu yang ditampilkan adalah menu jenis minuman
### Halaman Info Buka 
adalah halaman yang menampilkan jadwal restoran. Kapan buka dan kapan tutup. Jika status **“Open”** maka akan ditampilkan jam buka dan jam tutup nya. Sedangkan jika status **“Closed”** makan akan ditampilkan status tersebut.
### Login Admin
Jika mempunyai akun sebagai admin klik ikon di kanan atas lalu klik **login**, maka akan diarahkan ke **halaman Login** untuk Admin. Jika kita menekan tombol **Login** tanpa mengisi inputan, maka akan muncul alert perigatan. Dan jika username atau password yang kita masukkan **tidak valid**, akan muncul alert. Coba login masukkan username **“rinrin”** dan password **“arini”** yang sudah terdaftar di database.
### Halaman Admimn
Setelah **berhasil login**, akan muncul tampilan **halaman admin** yang berisi fitur dashboard, data admin, data menu, dan info buka.
### Halaman Data Admin
Buka halaman data admin, di sini kita bisa melihat, menambahkan, mengubah, dan menghapus data admin. Klik **“+ Tambah Data”** dan akan muncul modal tambah data, masukkan data yang akan ditambah. Klik ikon **Edit** Data yang berwarna **biru**, akan muncul modal untuk mengubah data, masukkan data yang akan diubah. Klik ikon **Hapus** Data yang berwarna **merah**, akan muncul **alert confirm** untuk menghapus data, klik **ok** jika ingin menghapus data.
### Halaman Data Menu
Buka halaman data menu, di sini kita bisa melihat, menambahkan, mengubah, dan menghapus data menu. Fitur ini memiliki alur yang sama dengan admin hanya aja ada fitur untuk **crud gambar**.
### Halaman Data Info
Buka halaman info buka, di sini kita bisa melihat, menambahkan, mengubah, dan menghapus data info buka. Pada data info ini sedikit berbeda dengan yang lainnya. Karena kolom **hari** adalah kolom **unik**, jadi jika kita menambahkan **hari yang sama**, halaman data info akan di **refresh**. Halaman ini juga memiliki fitur untuk mengubah status nya saja **Open** atau **Closed**. Caranya **klik button status** maka akan muncul **alert confirm**. Jika menekan **OK** status otomatis berubah.
### Logout
Jika ingin keluar dari halaman admin klik ikon di kanan atas lali klik **logout**, maka anda akan diarahkan ke **halaman awal**. Jika sudah klik **logout** maka **kita tidak akan bisa lagi ke halaman sebelumnya** setelah menekan tombol **Back**. Dan jika menekan tombol **Back** setelah Logout maka otomatis akan diarahkan ke **halaman login** admin lagi.
 

# ElaAdmin HTML5 Admin Dashboard Template
**ElaAdmin** is a responsive Bootstrap 4 Admin Template. It provides you with a collection of ready to use code snippets and utilities, custom pages, loads of charts, dashboard variations, a collection of applications and some useful widgets. Preview of this awesome admin template available here: https://colorlib.com/polygon/elaadmin/index.html

# Preview

### Screenshot

![ElaAdmin admin dashboard template preview](https://colorlib.com/wp/wp-content/uploads/sites/2/ela-admin-free-admin-panel-template.jpg)

### Demo Site: [Here](https://colorlib.com/polygon/elaadmin/index.html)

### TOC
- [Built With](#built-with)
- [Changelog](#changelog)
- [Authors](#authors)
- [License](#license)

### Built With

- [amCharts](https://www.amcharts.com/)
- [barRating](http://github.com/antennaio/jquery-bar-rating)
- [Bootstrap](http://getbootstrap.com/)
- [C3](https://github.com/c3js/c3) - A D3-based reusable chart library
- [Chart.js](http://www.chartjs.org/)
- [Chartist.js](https://gionkunz.github.io/chartist-js/)
- [Chosen](https://harvesthq.github.io/chosen/)
- [DataMaps](http://datamaps.github.io/)
- [dataTables](https://datatables.net/)
- [Datepicker for Bootstrap](https://github.com/uxsolutions/bootstrap-datepicker)
- [Dropzone.js](http://www.dropzonejs.com)
- [ECharts](https://github.com/ecomfe/echarts/)
- [Flot Charts](http://www.flotcharts.org/)
- [Fontawesome](http://fontawesome.io/)
- [FullCalendar](https://fullcalendar.io/)
- [gauge.js](http://bernii.github.io/gauge.js/)
- [gmaps](https://hpneo.github.io/gmaps/)
- [Granim](https://sarcadass.github.io/granim.js)
- [Highcharts JS](http://www.highcharts.com/)
- [Ion.RangeSlider](https://github.com/IonDen/ion.rangeSlider)
- [jQuery asScrollbar](https://github.com/amazingSurge/jquery-asScrollbar)
- [jQuery Knob](https://github.com/aterrien/jQuery-Knob)
- [jQuery Line Progressbar](https://kingrayhan.github.io/LineProgressbar/)
- [jQuery Validation Plugin](http://jqueryvalidation.org/)
- [jquery-circle-progress](http://kottenator.github.io/jquery-circle-progress/) - jQuery Plugin to draw animated circular progress bars
- [jquery.sparkline](http://omnipotent.net/jquery.sparkline/)
- [jQuery](https://jquery.com/)
- [JQVMap](https://github.com/manifestinteractive/jqvmap/) - jQuery Vector Map Library
- [JQVMap](https://jqvmap.com/)
- [jRate](https://github.com/senthilporunan/jRate) - SVG based star Rating jQuery plugin
- [jsgrid](https://github.com/tabalinas/jsgrid) - Lightweight Grid jQuery Plugin
- [JustGage](http://www.justgage.com) - animated gauges using RaphaelJS
- [Load Google Maps API](https://github.com/yuanqing/load-google-maps-api)
- [metismenu](https://github.com/onokumus/metisMenu) - A simple jQuery menu plugin
- [moment.js](https://momentjs.com)
- [morris.js](http://morrisjs.github.io/morris.js/)
- [Nestable jQuery Plugin](https://github.com/dbushell/Nestable)
- [Owl Carousel](https://github.com/OwlCarousel2/OwlCarousel2)
- [Pace](https://github.com/HubSpot/pace) - website preloader
- [Peity](http://benpickles.github.io/peity)
- [Peity](http://benpickles.github.io/peity/)
- [Popper.js](https://popper.js.org/)
- [Raphaël](https://github.com/DmitryBaranovskiy/raphael) - Cross-browser vector graphics
- [Rickshaw](https://github.com/shutterstock/rickshaw)
- [Sass](http://sass-lang.com/)
- [Select2](https://github.com/select2/select2)
- [simpleWeather](http://simpleweatherjs.com )
- [Sticky-kit](https://github.com/leafo/sticky-kit)
- [Sweetalert2](https://github.com/sweetalert2/sweetalert2)
- [toastr](https://github.com/CodeSeven/toastr)
- [wysihtml5](https://github.com/xing/wysihtml5)


### Changelog
#### V 1.0.0
Initial Release
### Authors
[Colorlib](https://colorlib.com)

### More info
- [Bootstrap admin dashboards](https://colorlib.com/wp/free-bootstrap-admin-dashboard-templates/)
- [Angular dashboards](https://colorlib.com/wp/angularjs-admin-templates/)
- [Free Admin Dashboards](https://colorlib.com/wp/free-html5-admin-dashboard-templates/)
- [Website Templates](https://colorlib.com/wp/templates/)
- [WordPress Themes](https://colorlib.com/wp/free-wordpress-themes/)

### License

ElaAdmin is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of this template.
