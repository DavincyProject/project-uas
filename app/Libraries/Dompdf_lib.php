<?php

namespace App\Libraries;

use Dompdf\Dompdf;

class Dompdf_lib
{
    protected $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function generate($html, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = "portrait")
    {
        $this->dompdf->set_paper($paper, $orientation);
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();
        if ($stream) {
            $this->dompdf->stream($filename . ".pdf", array("Attachment" => false));
        } else {
            return $this->dompdf->output();
        }
    }
}
