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
            'nama' => 'Komputer PC HP Core Duo Ram 4GB HDD 250GB LED 16inch',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12346',
            'nama' => 'Komputer PC Acer Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12347',
            'nama' => 'Komputer PC DELL Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13561',
            'nama' => 'Komputer PC Samsung Core Duo Ram 4GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);
        
        Barang::create([
            'id' => '13562',
            'nama' => 'Komputer PC Asus Core Duo Ram 4GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13563',
            'nama' => 'PC Apple iMac [MRT42ID/A]/Core i5-3.0Ghz/8GB/1TB/VGA 4GB/21.5″/MacOS',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '14561',
            'nama' => 'Komputer PC HP Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '1',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '16161',
            'nama' => 'Printer Cannon PIXMA G670',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'2',
        ]);
        
        Barang::create([
            'id' => '17511',
            'nama' => 'Cash Drawer EPPOS RJ- 11 (37 x 33 Cm )',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17512',
            'nama' => 'Cash Drawer Blueprint CD-BPL02 34x36x10,8 Cm',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17513',
            'nama' => 'VSC Cash Drawer 37 X 33 Cm 4K4C RJ11 CD 320',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17514',
            'nama' => 'Cash Drawer Kassen K410 K-410',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17515',
            'nama' => 'Cash Drawer CD320 RJ-11',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17516',
            'nama' => 'Sharkpos CD320 Cash Drawer Mini Laci Uang',
            'id_kategori' => '1',
            'id_rak' => '2',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17121',
            'nama' => 'HP DeskJet Ink Advantage 2776 All-in-One Printer (7HZ99B)',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17122',
            'nama' => 'Canon Printer PIXMA TS5370 Pink',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);  
        
        Barang::create([
            'id' => '17123',
            'nama' => 'Printer Cannon MP 287 MP 237 dan MP 258',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17124',
            'nama' => 'Canon Printer PIXMA MG2570S All In One',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17125',
            'nama' => 'Printer Epson L210',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17126',
            'nama' => 'Canon Multifunction Ink Jet Printer MG2570S',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '18321',
            'nama' => 'Barcode Printer Thermal XPrinter XP-420U Support 110MM',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18322',
            'nama' => 'Printer Barcode Label Thermal Portabel IWare PB-582',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18323',
            'nama' => 'Printer Bluetooth Thermal 80MM',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18324',
            'nama' => 'Printer Bluetooth Mini Portable Printer Thermal 58MM',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18325',
            'nama' => 'Printer Barcode XPrinter XP460BT USB Bluetooth Thermal',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18326',
            'nama' => 'Portable Mini Printer Bluetooth EPPOS EP5881 58mm',
            'id_kategori' => '1',
            'id_rak' => '3',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '19201',
            'nama' => 'Office Chair',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19202',
            'nama' => 'Kursi Kantor Hidrolik',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19203',
            'nama' => 'Kursi Gaming',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19204',
            'nama' => 'Kursi Lipat Portable',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19205',
            'nama' => 'Kursi Taman',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19206',
            'nama' => 'Stool Chair',
            'id_kategori' => '2',
            'id_rak' => '11',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '20201',
            'nama' => 'Switch Hub TP Link 5 Port',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20202',
            'nama' => 'Switch Hub TP Link 8 Port',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20203',
            'nama' => 'Switch Hub TP Link 16 Port',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '7',
        ]);

        Barang::create([
            'id' => '21201',
            'nama' => 'TP-Link EN020-F5 Wireless Router',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21202',
            'nama' => 'TP-Link TL-WR940N 450 Mbps Wireless N Router',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21203',
            'nama' => 'AX1800 Dual-Band Wifi 6 Router',
            'id_kategori' => '1',
            'id_rak' => '4',
            'id_supplier' => '8',
        ]);

        Barang::create([
            'id' => '23201',
            'nama' => 'Scanner Cannon',
            'id_kategori' => '1',
            'id_rak' => '5',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23202',
            'nama' => 'Scanner Epson ',
            'id_kategori' => '1',
            'id_rak' => '5',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23203',
            'nama' => 'Scanner HP',
            'id_kategori' => '1',
            'id_rak' => '5',
            'id_supplier' => '9',
        ]);

        Barang::create([
            'id' => '24201',
            'nama' => 'CyberPower VP1000ELCD UPS System',
            'id_kategori' => '1',
            'id_rak' => '6',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24202',
            'nama' => 'Prolink PRO700SFC UPS System',
            'id_kategori' => '1',
            'id_rak' => '6',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24203',
            'nama' => 'Inforce UPS IF 650WA',
            'id_kategori' => '1',
            'id_rak' => '6',
            'id_supplier' => '10',
        ]);

        Barang::create([
            'id' => '25201',
            'nama' => 'Stabilizer Matsunaga Stavol 3000 watt',
            'id_kategori' => '1',
            'id_rak' => '7',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25202',
            'nama' => 'Stabilizer Sako SVC-500 VA',
            'id_kategori' => '1',
            'id_rak' => '7',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25203',
            'nama' => 'Inforce Stavolt Motor SVC 500VA Stabilizer',
            'id_kategori' => '1',
            'id_rak' => '7',
            'id_supplier' => '11',
        ]);

        Barang::create([
            'id' => '26201',
            'nama' => 'Samsung 70 Crystal UHD BU8100',
            'id_kategori' => '1',
            'id_rak' => '8',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26202',
            'nama' => 'LG OLED evo C2 83 inch 4K Smart TV',
            'id_kategori' => '1',
            'id_rak' => '8',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26203',
            'nama' => 'Panasonic OLED TV TH-65LZ2000G',
            'id_kategori' => '1',
            'id_rak' => '8',
            'id_supplier' => '12',
        ]);

        Barang::create([
            'id' => '18181',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18182',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18183',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18184',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '30101',
            'nama' => 'DVR 4 Channel Cooper Up To 1080P',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30102',
            'nama' => 'DVR 4 Channel Cooper Up To 1080P',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30103',
            'nama' => 'DVR 4 Channel Cooper Up To 1080P',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'14',
        ]);

        Barang::create([
            'id' => '40101',
            'nama' => 'Toshiba Canvio Premium 2 TB',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '40102',
            'nama' => 'Toshiba Canvio Premium 2 TB',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '50101',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '50102',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '50103',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '9',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '60101',
            'nama' => 'Krisbow Tangga Multi Fungsi',
            'id_kategori' => '2',
            'id_rak' => '12',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60102',
            'nama' => 'Tangga Lipat Fortuna Altima',
            'id_kategori' => '2',
            'id_rak' => '12',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60103',
            'nama' => 'Tangga Aluminium Lipat Talux',
            'id_kategori' => '2',
            'id_rak' => '12',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60104',
            'nama' => 'Tangga Aluminium Lipat Talux',
            'id_kategori' => '2',
            'id_rak' => '12',
            'id_supplier' =>'16',
        ]);




        // bina marindal swawlayan
        Barang::create([
            'id' => '12348',
            'nama' => 'Komputer PC Acer Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12349',
            'nama' => 'Komputer PC HP Core Duo Ram 4GB HDD 250GB LED 16inch',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '12350',
            'nama' => 'Komputer PC Samsung Core Duo Ram 4GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13564',
            'nama' => 'Komputer PC DELL Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);
        
        Barang::create([
            'id' => '13565',
            'nama' => 'Komputer PC Asus Core Duo Ram 4GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '13566',
            'nama' => 'PC Apple iMac [MRT42ID/A]/Core i5-3.0Ghz/8GB/1TB/VGA 4GB/21.5″/MacOS',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '14562',
            'nama' => 'Komputer PC HP Core Duo Ram 8GB SSD 250GB',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'1',
        ]);

        Barang::create([
            'id' => '16162',
            'nama' => 'Printer Cannon PIXMA G670',
            'id_kategori' => '1',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'2',
        ]);

        Barang::create([
            'id' => '17517',
            'nama' => 'Cash Drawer Blueprint CD-BPL02 34x36x10,8 Cm',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17518',
            'nama' => 'Cash Drawer EPPOS RJ- 11 (37 x 33 Cm)',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17519',
            'nama' => 'Cash Drawer Kassen K410 K-410',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17520',
            'nama' => 'VSC Cash Drawer 37 X 33 Cm 4K4C RJ11 CD 320',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17521',
            'nama' => 'Sharkpos CD320 Cash Drawer Mini Laci Uang',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);

        Barang::create([
            'id' => '17522',
            'nama' => 'Cash Drawer CD320 RJ-11',
            'id_kategori' => '1',
            'id_rak' => '31',
            'id_supplier' =>'3',
        ]);
        
        Barang::create([
            'id' => '17127',
            'nama' => 'Canon Printer PIXMA TS5370 Pink',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17128',
            'nama' => 'HP DeskJet Ink Advantage 2776 All-in-One Printer (7HZ99B)',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17129',
            'nama' => 'Canon Printer PIXMA MG2570S ALL IN ONE',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17130',
            'nama' => 'Printer Canon MP 287 MP 237 dan MP 258',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17131',
            'nama' => 'Canon Multifunction Ink Jet Printer MG2570S',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '17132',
            'nama' => 'Printer Epson L210',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'4',
        ]);

        Barang::create([
            'id' => '18327',
            'nama' => 'Barcode Printer Thermal XPrinter XP-420U Support 110MM',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18328',
            'nama' => 'Printer Barcode Label Thermal Portabel IWare PB-582',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18329',
            'nama' => 'Printer Bluetooth Mini Portable Printer Thermal 58MM',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18330',
            'nama' => 'Printer Bluetooth Thermal 80MM',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18331',
            'nama' => 'Portable Mini Printer Bluetooth EPPOS EP5881 58mm',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '18332',
            'nama' => 'Printer Barcode XPrinter XP460BT USB Bluetooth Thermal',
            'id_kategori' => '1',
            'id_rak' => '32',
            'id_supplier' =>'5',
        ]);

        Barang::create([
            'id' => '19207',
            'nama' => 'Office Chair',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19208',
            'nama' => 'Kursi Kantor Hidrolik',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19209',
            'nama' => 'Kursi Lipat Portable',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19210',
            'nama' => 'Kursi Gaming',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19211',
            'nama' => 'Stool Chair',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '19212',
            'nama' => 'Kursi Taman',
            'id_kategori' => '2',
            'id_rak' => '41',
            'id_supplier' =>'6',
        ]);

        Barang::create([
            'id' => '20204',
            'nama' => 'Switch Hub TP Link 5 Port',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20205',
            'nama' => 'Switch Hub TP Link 8 Port',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '7',
        ]);
        
        Barang::create([
            'id' => '20206',
            'nama' => 'Switch Hub TP Link 16 Port',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '7',
        ]);

        Barang::create([
            'id' => '21204',
            'nama' => 'TP-Link EN020-F5 Wireless Router',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21205',
            'nama' => 'TP-Link TL-WR940N 450 Mbps Wireless N Router',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '8',
        ]);
        
        Barang::create([
            'id' => '21206',
            'nama' => 'AX1800 Dual-Band Wifi 6 Router',
            'id_kategori' => '1',
            'id_rak' => '33',
            'id_supplier' => '8',
        ]);

        Barang::create([
            'id' => '23204',
            'nama' => 'Scanner Cannon',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23205',
            'nama' => 'Scanner Epson',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '9',
        ]);
        
        Barang::create([
            'id' => '23206',
            'nama' => 'Scanner HP',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '9',
        ]);

        Barang::create([
            'id' => '24204',
            'nama' => 'CyberPower VP1000ELCD UPS System',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24205',
            'nama' => 'Prolink PRO700SFC UPS System',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '10',
        ]);
        
        Barang::create([
            'id' => '24206',
            'nama' => 'Inforce UPS IF 650WA',
            'id_kategori' => '1',
            'id_rak' => '34',
            'id_supplier' => '10',
        ]);

        Barang::create([
            'id' => '25204',
            'nama' => 'Stabilizer Matsunaga Stavol 3000 watt',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25205',
            'nama' => 'Stabilizer Sako SVC-500 VA',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '11',
        ]);
        
        Barang::create([
            'id' => '25206',
            'nama' => 'Inforce Stavolt Motor SVC 500VA Stabilizer',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '11',
        ]);

        Barang::create([
            'id' => '26204',
            'nama' => 'Samsung 70" Crystal UHD BU8100',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26205',
            'nama' => 'LG OLED evo C2 83 inch 4K Smart TV',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '12',
        ]);
        
        Barang::create([
            'id' => '26206',
            'nama' => 'Panasonic OLED TV TH-65LZ2000G',
            'id_kategori' => '1',
            'id_rak' => '35',
            'id_supplier' => '12',
        ]);

        Barang::create([
            'id' => '18185',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '36',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18186',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '36',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18187',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '36',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '18188',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '36',
            'id_supplier' =>'13',
        ]);
        Barang::create([
            'id' => '18189',
            'nama' => 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF',
            'id_kategori' => '1',
            'id_rak' => '36',
            'id_supplier' =>'13',
        ]);

        Barang::create([
            'id' => '30104',
            'nama' => 'DVR 4 Channel Cooper Up To 1080P',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'14',
        ]);
        Barang::create([
            'id' => '30105',
            'nama' => 'DVR 4 Channel Cooper Up To 1080P',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'14',
        ]);

        Barang::create([
            'id' => '40103',
            'nama' => 'Toshiba Canvio Premium 2 TB',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'11',
        ]);
        Barang::create([
            'id' => '40104',
            'nama' => 'Toshiba Canvio Premium 2 TB',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'11',
        ]);

        Barang::create([
            'id' => '50104',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'15',
        ]);
        Barang::create([
            'id' => '501015',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'15',
        ]);
        Barang::create([
            'id' => '50106',
            'nama' => 'Hartech Diesel Genset',
            'id_kategori' => '1',
            'id_rak' => '37',
            'id_supplier' =>'15',
        ]);

        Barang::create([
            'id' => '60105',
            'nama' => 'Krisbow Tangga Multi Fungsi',
            'id_kategori' => '2',
            'id_rak' => '42',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60106',
            'nama' => 'Tangga Lipat Fortuna Altima',
            'id_kategori' => '2',
            'id_rak' => '42',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60107',
            'nama' => 'Tangga Aluminium Lipat Talux',
            'id_kategori' => '2',
            'id_rak' => '42',
            'id_supplier' =>'16',
        ]);

        Barang::create([
            'id' => '60108',
            'nama' => 'Tangga Aluminium Lipat Talux',
            'id_kategori' => '2',
            'id_rak' => '42',
            'id_supplier' =>'16',
        ]);

        
    }
}