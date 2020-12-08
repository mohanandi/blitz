<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{
    public function export_voucher()
    {

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'right' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'bottom' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'left' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ],
        ];

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Puskesmas')
            ->setCellValue('A2', 'No Registrasi')
            ->setCellValue('A3', 'Tanggal Pendirian')
            ->setCellValue('A4', 'Alamat')
            ->setCellValue('A5', 'Kecamatan')
            ->setCellValue('A6', 'Kabupaten/Kota')
            ->setCellValue('A7', 'Provinsi')
            ->setCellValue('A8', 'No. Telepon Puskesmas dan No Telepon Whatsapp')
            ->setCellValue('A9', 'No. Telepon Ruang Gadar')
            ->setCellValue('A10', 'No. Faksimile')
            ->setCellValue('A11', 'Alamat email')
            ->setCellValue('A12', 'Alamat website');

        $spreadsheet->getActiveSheet()->getStyle('A1:A12')->applyFromArray($styleArray);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(50);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(30);

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Identitas Puskesmas.xlsx"');
        header('Cache-Control: max-age=0');

        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'My Data');

        // Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object
        $spreadsheet->addSheet($myWorkSheet, 0);

        $writer->save('php://output');
    }
}
