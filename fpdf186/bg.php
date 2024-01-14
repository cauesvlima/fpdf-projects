<?php
require('fpdf.php');

class PDFWithBackground extends FPDF {
    private $backgroundImage;

    public function setBackgroundImage($imagePath) {
        $this->backgroundImage = $imagePath;
    }

    public function Header() {
        // Não faça nada no cabeçalho, para que a imagem não seja coberta por nada.
    }

    public function Footer() {
        // Não faça nada no rodapé, para que a imagem não seja coberta por nada.
    }

    public function AddPage($orientation = '', $size = '',  $rotation = 0) {
        parent::AddPage($orientation, $size);

        if (!empty($this->backgroundImage)) {
            $this->Image($this->backgroundImage, 0, 0, $this->w, $this->h);
        }
    }
}
?>