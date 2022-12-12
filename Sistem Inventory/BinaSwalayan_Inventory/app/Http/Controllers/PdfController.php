<?php

namespace App\Http\Controllers;

use App\Models\View_Barang;
use App\Models\View_Req_Pembelian;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\View_Rusak;

class PdfController extends Controller
{
	protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf('p', 'mm', 'Letter');
    }

    public function cetakLaporanRusak() 
    {
        $this->fpdf->AddPage();
    	$this->fpdf->SetFont('Times','B',16);
        $this->fpdf->Cell(0,7,'Daftar Laporan Rusak',0,1,'C');
        $this->fpdf->Cell(10,7,'',0,1);    
        $this->fpdf->SetFont('Times','B',10);  

        $this->fpdf->Cell(15,6,'ID',1,0,'C');
        $this->fpdf->Cell(45,6,'Item',1,0,'C');
        $this->fpdf->Cell(30,6,'Category',1,0,'C');
        $this->fpdf->Cell(20,6,'Rack',1,0,'C');
        $this->fpdf->Cell(35,6,'Warehouse',1,0,'C');
        $this->fpdf->Cell(50,6,'Outlet',1,1,'C');
        
        $this->fpdf->SetFont('Times','',10);

        $hasils = View_Rusak::all();
        foreach ($hasils as $hasil){
        $this->fpdf->Cell(15,6,$hasil->id,1,0,'C');
        $this->fpdf->Cell(45,6,$hasil->nama_barang,1,0,);
        $this->fpdf->Cell(30,6,$hasil->kategori,1,0);
        $this->fpdf->Cell(20,6,$hasil->rak,1,0);
        $this->fpdf->Cell(35,6,$hasil->gudang,1,0);
        $this->fpdf->Cell(50,6,$hasil->nama,1,1);
        }
        
        $this->fpdf->Output();

        exit;
    }

    public function cetakRequestBeli() 
    {
        $this->fpdf->AddPage();
    	$this->fpdf->SetFont('Times','B',16);
        $this->fpdf->Cell(0,7,'Daftar Request Pembelian',0,1,'C');
        $this->fpdf->Cell(10,7,'',0,1); 
        $this->fpdf->SetFont('Times','B',10);  

        $this->fpdf->Cell(15,6,'No.',1,0,'C');
        $this->fpdf->Cell(55,6,'Item',1,0,'C');
        $this->fpdf->Cell(30,6,'Category',1,0,'C');
        $this->fpdf->Cell(45,6,'Requester',1,0,'C');
        $this->fpdf->Cell(50,6,'Outlet',1,1,'C');
        
        $this->fpdf->SetFont('Times','',10);

        $hasils = View_Req_Pembelian::all();
        foreach ($hasils as $hasil){
        $this->fpdf->Cell(15,6,$hasil->id,1,0,'C');
        $this->fpdf->Cell(55,6,$hasil->nama_barang,1,0,);
        $this->fpdf->Cell(30,6,$hasil->nama_kategori,1,0);
        $this->fpdf->Cell(45,6,$hasil->nama_user,1,0);
        $this->fpdf->Cell(50,6,$hasil->nama_outlet,1,1);
        }
        
        $this->fpdf->Output();

        exit;
    }

    public function cetakListBarang() 
    {
        $this->fpdf->AddPage();
    	$this->fpdf->SetFont('Times','B',16);
        $this->fpdf->Cell(0,7,'Daftar List Barang',0,1,'C');
        $this->fpdf->Cell(10,7,'',0,1); 
        $this->fpdf->SetFont('Times','B',10);  

        $this->fpdf->Cell(15,6,'ID',1,0,'C');
        $this->fpdf->Cell(30,6,'Item',1,0,'C');
        $this->fpdf->Cell(20,6,'Category',1,0,'C');
        $this->fpdf->Cell(15,6,'Rack',1,0,'C');
        $this->fpdf->Cell(20,6,'Warehouse',1,0,'C');
        $this->fpdf->Cell(40,6,'Outlet',1,0,'C');
        $this->fpdf->Cell(20,6,'Status',1,0,'C');
        $this->fpdf->Cell(38,6,'Supplier',1,1,'C');
        
        $this->fpdf->SetFont('Times','',10);

        $hasils = View_Barang::all();
        foreach ($hasils as $hasil){
        $this->fpdf->Cell(15,6,$hasil->id,1,0,'C');
        $this->fpdf->Cell(30,6,$hasil->Nama,1,0,);
        $this->fpdf->Cell(20,6,$hasil->Kategori,1,0);
        $this->fpdf->Cell(15,6,$hasil->Rak,1,0);
        $this->fpdf->Cell(20,6,$hasil->Gudang,1,0);
        $this->fpdf->Cell(40,6,$hasil->Outlet,1,0);
        $this->fpdf->Cell(20,6,$hasil->Status,1,0);
        $this->fpdf->Cell(38,6,$hasil->Supplier,1,1);
        }
        
        $this->fpdf->Output();

        exit;
    }
}