<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Faker\Factory;
class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $b = [];
        // $faker = Factory::create();

        // for($i = 1; $i <= 100; $i++)
        // {
        // $b[] = [
        //     'id' => rand(10000,99999),
        //     'nama' => $faker->word(),
        //     'id_kategori' => rand(1,6),
        //     'id_rak' => rand(1,10),
        //     'id_supplier' => rand(1,10),
        // ];
        // }
        // \DB::table('barangs')->insert($b);

        // bina karya swalayan
        Barang::create([
            'id' => '12345',
            'nama' => 'Komputer Kasir 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12346',
            'nama' => 'Komputer Kasir 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12347',
            'nama' => 'Komputer Kasir 3',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13561',
            'nama' => 'Komputer gudang 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);
        
        Barang::create([
            'id' => '13562',
            'nama' => 'Komputer gudang 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13563',
            'nama' => 'Komputer gudang 3',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '14561',
            'nama' => 'Komputer server 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '16161',
            'nama' => 'printer 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'2',
        ]);
        
        Barang::create([
            'id' => '17511',
            'nama' => 'drawer 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17512',
            'nama' => 'drawer 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17513',
            'nama' => 'drawer 3',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17514',
            'nama' => 'drawer 4',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17515',
            'nama' => 'drawer 5',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17516',
            'nama' => 'drawer 6',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17121',
            'nama' => 'printer kasir 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17122',
            'nama' => 'printer kasir 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);  
        
        Barang::create([
            'id' => '17123',
            'nama' => 'printer kasir 3',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17124',
            'nama' => 'printer kasir 4',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17125',
            'nama' => 'printer kasir 5',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17126',
            'nama' => 'printer kasir 6',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '18321',
            'nama' => 'printer barcode 1',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18322',
            'nama' => 'printer barcode 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18323',
            'nama' => 'printer barcode 3',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18324',
            'nama' => 'printer barcode 4',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18325',
            'nama' => 'printer barcode 5',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18326',
            'nama' => 'printer barcode 6',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '19201',
            'nama' => 'kursi 1',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19202',
            'nama' => 'kursi 2',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19203',
            'nama' => 'kursi 3',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19204',
            'nama' => 'kursi 4',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19205',
            'nama' => 'kursi 5',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19206',
            'nama' => 'kursi 6',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '20201',
            'nama' => 'Switch Hub TP Link 5 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20202',
            'nama' => 'Switch Hub TP Link 8 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20203',
            'nama' => 'Switch Hub TP Link 16 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);

        Barang::create([
            'id' => '21201',
            'nama' => 'TP-Link EN020-F5 Wireless Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21202',
            'nama' => 'TP-Link TL-WR940N 450 Mbps Wireless N Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21203',
            'nama' => 'AX1800 Dual-Band Wifi 6 Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);

        Barang::create([
            'id' => '23201',
            'nama' => 'Scanner Cannon',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23202',
            'nama' => 'Scanner Epson ',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23203',
            'nama' => 'Scanner HP',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);

        Barang::create([
            'id' => '24201',
            'nama' => 'CyberPower VP1000ELCD UPS System',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24202',
            'nama' => 'Prolink PRO700SFC UPS System',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24203',
            'nama' => 'Inforce UPS IF 650WA',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);

        Barang::create([
            'id' => '25201',
            'nama' => 'Stabilizer Matsunaga Stavol 3000 watt',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25202',
            'nama' => 'Stabilizer Sako SVC-500 VA',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25203',
            'nama' => 'Inforce Stavolt Motor SVC 500VA Stabilizer',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);

        Barang::create([
            'id' => '26201',
            'nama' => 'Samsung 70" Crystal UHD BU8100',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26202',
            'nama' => 'LG OLED evo C2 83 inch 4K Smart TV',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26203',
            'nama' => 'Panasonic OLED TV TH-65LZ2000G',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);

        Barang::create([
            'id' => '18181',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18182',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18183',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18184',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '30101',
            'nama' => 'DVR 4CHANNEL COOPER UP TO 1080P',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30102',
            'nama' => 'DVR 4CHANNEL COOPER UP TO 1080P',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30103',
            'nama' => 'DVR 4CHANNEL COOPER UP TO 1080P',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'14',
        ]);

        Barang::create([
            'id' => '40101',
            'nama' => 'TOSHIBA CANVIO PREMIUM 2 TB',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '40102',
            'nama' => 'TOSHIBA CANVIO PREMIUM 2 TB',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '50101',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '50102',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '50103',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '60101',
            'nama' => 'KRISBOW TANGGA MULTI FUNGSI',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60102',
            'nama' => 'TANGGA LIPAT FORTUNA ALTIMA',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60103',
            'nama' => 'TANGGA ALUMINIUM LIPAT TALUX',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60104',
            'nama' => 'TANGGA ALUMINIUM LIPAT TALUX',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);




        // bina marindal swawlayan
        Barang::create([
            'id' => '12348',
            'nama' => 'Komputer Kasir 4',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12349',
            'nama' => 'Komputer Kasir 5',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12350',
            'nama' => 'Komputer Kasir 6',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13564',
            'nama' => 'Komputer gudang 4',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);
        
        Barang::create([
            'id' => '13565',
            'nama' => 'Komputer gudang 5',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13566',
            'nama' => 'Komputer gudang 6',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '14562',
            'nama' => 'Komputer server 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '16162',
            'nama' => 'printer 2',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'2',
        ]);

        Barang::create([
            'id' => '17517',
            'nama' => 'drawer 7',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17518',
            'nama' => 'drawer 8',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17519',
            'nama' => 'drawer 9',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17520',
            'nama' => 'drawer 10',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17521',
            'nama' => 'drawer 11',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17522',
            'nama' => 'drawer 12',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'3',
        ]);
        
        Barang::create([
            'id' => '17127',
            'nama' => 'printer kasir 7',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17128',
            'nama' => 'printer kasir 8',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17129',
            'nama' => 'printer kasir 9',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17130',
            'nama' => 'printer kasir 10',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17131',
            'nama' => 'printer kasir 11',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17132',
            'nama' => 'printer kasir 12',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '18327',
            'nama' => 'printer barcode 7',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18328',
            'nama' => 'printer barcode 8',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18329',
            'nama' => 'printer barcode 9',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18330',
            'nama' => 'printer barcode 10',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18331',
            'nama' => 'printer barcode 11',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18332',
            'nama' => 'printer barcode 12',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '19207',
            'nama' => 'kursi 7',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19208',
            'nama' => 'kursi 8',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19209',
            'nama' => 'kursi 9',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19210',
            'nama' => 'kursi 10',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19211',
            'nama' => 'kursi 11',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19212',
            'nama' => 'kursi 12',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '20204',
            'nama' => 'Switch Hub TP Link 5 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20205',
            'nama' => 'Switch Hub TP Link 8 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20206',
            'nama' => 'Switch Hub TP Link 16 Port',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '7',
        ]);

        Barang::create([
            'id' => '21204',
            'nama' => 'TP-Link EN020-F5 Wireless Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21205',
            'nama' => 'TP-Link TL-WR940N 450 Mbps Wireless N Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21206',
            'nama' => 'AX1800 Dual-Band Wifi 6 Router',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '8',
        ]);

        Barang::create([
            'id' => '23204',
            'nama' => 'Scanner Cannon',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23205',
            'nama' => 'Scanner Epson',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23206',
            'nama' => 'Scanner HP',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '9',
        ]);

        Barang::create([
            'id' => '24204',
            'nama' => 'CyberPower VP1000ELCD UPS System',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24205',
            'nama' => 'Prolink PRO700SFC UPS System',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24206',
            'nama' => 'Inforce UPS IF 650WA',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '10',
        ]);

        Barang::create([
            'id' => '25204',
            'nama' => 'Stabilizer Matsunaga Stavol 3000 watt',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25205',
            'nama' => 'Stabilizer Sako SVC-500 VA',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25206',
            'nama' => 'Inforce Stavolt Motor SVC 500VA Stabilizer',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '11',
        ]);

        Barang::create([
            'id' => '26204',
            'nama' => 'Samsung 70" Crystal UHD BU8100',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26205',
            'nama' => 'LG OLED evo C2 83 inch 4K Smart TV',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26206',
            'nama' => 'Panasonic OLED TV TH-65LZ2000G',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' => '12',
        ]);

        Barang::create([
            'id' => '18185',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18186',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18187',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18188',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => ' ',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18189',
            'nama' => 'CAMERA CCTV HIKVISION DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '30104',
            'nama' => 'DVR 4CHANNEL COOPER UP TO 1080P',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30105',
            'nama' => 'DVR 4CHANNEL COOPER UP TO 1080P',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'14',
        ]);

        Barang::create([
            'id' => '40103',
            'nama' => 'TOSHIBA CANVIO PREMIUM 2 TB',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'11',
        ]);
        Barang::create([
            'id' => '40104',
            'nama' => 'TOSHIBA CANVIO PREMIUM 2 TB',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '50104',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);
        Barang::create([
            'id' => '501015',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);
        Barang::create([
            'id' => '50106',
            'nama' => 'HARTECH DIESEL GENSET',
            'id_kategori' => '1',
            'id_rak' => '',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '60105',
            'nama' => 'KRISBOW TANGGA MULTI FUNGSI',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60106',
            'nama' => 'TANGGA LIPAT FORTUNA ALTIMA',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60107',
            'nama' => 'TANGGA ALUMINIUM LIPAT TALUX',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60108',
            'nama' => 'TANGGA ALUMINIUM LIPAT TALUX',
            'id_kategori' => '2',
            'id_rak' => '',
            'id_supplier' =>'16',
        ]);

        
    }
}