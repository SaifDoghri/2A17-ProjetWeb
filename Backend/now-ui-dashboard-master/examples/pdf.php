<?php
   
    require($_SERVER['DOCUMENT_ROOT']."/Backend/now-ui-dashboard-master/fpdf/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=projet_sante", "root", "");
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Questions",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Questions:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'Questions 1',1,0,'C');
    $this->Cell(40,10,'Questions 2',1,0,'C');
    $this->Cell(40,10,'Questions 3',1,0,'C');
    $this->Cell(40,10,'Questions 4',1,0,'C');
    $this->Cell(40,10,'Questions 5',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SElECT * From Question");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->question1,1,0,'C');
       $this->Cell(40,10,$data->question2,1,0,'L');
       $this->Cell(40,10,$data->question3,1,0,'L');
       $this->Cell(40,10,$data->question4,1,0,'L');
       $this->Cell(40,10,$data->question5,1,0,'L');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Questions.pdf", "D");


?>