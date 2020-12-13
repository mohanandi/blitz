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
    public function export_vouchervisa($id_voucher)
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
    public function export_rptka($id_rptka)
    {
        $data_rptka = $this->db->get_where('rptka', ['id' => $id_rptka])->row_array();
        $judul = "RPTKA " . $data_rptka['no_rptka'];
        $data_jabatan_rptka = $this->db->get_where('jabatan_rptka', ['id_rptka' => $id_rptka])->result_array();
        $data_pengguna_rptka = $this->db->get_where('penghubung_visa312', ['id_rptka' => $id_rptka, 'id_pt' => $data_rptka['id_pt']])->result_array();
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

        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $style_row = array(
            'alignment' => array(
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)->setCellValue('B1', "DATA RPTKA"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $spreadsheet->getActiveSheet()->mergeCells('B1:N1'); // Set Merge Cell pada kolom A1 sampai F1
        $spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $spreadsheet->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('B2', "NO RPTKA"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $spreadsheet->getActiveSheet()->mergeCells('B2:N2'); // Set Merge Cell pada kolom A1 sampai F1
        $spreadsheet->getActiveSheet()->getStyle('B2')->getFont()->setBold(TRUE); // Set bold kolom A1
        $spreadsheet->getActiveSheet()->getStyle('B2')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

        // Buat header tabel nya pada baris ke 3
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('B3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('C3', "NAMA MANDARIN"); // Set kolom B3 dengan tulisan "NIS"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('D3', "NAMA"); // Set kolom C3 dengan tulisan "NAMA"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('E3', "PASSPORT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('F3', "KEWARGANEGARAAN"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('G3', "EXPIRED PASSPORT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('H3', "JENIS VISA"); // Set kolom E3 dengan tulisan "TELEPON"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('I3', "JABATAN"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('J3', "JANGKA WAKTU VISA (BULAN)"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('K3', "TANGGAL TERBIT VISA"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('L3', "NO KITAS"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('M3', "KADALUARSA KITAS"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('N3', "KETERANGAN"); // Set kolom F3 dengan tulisan "ALAMAT"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('O3', "STATUS"); // Set kolom F3 dengan tulisan "ALAMAT"


        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $spreadsheet->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);

        // Set height baris ke 1, 2 dan 3
        $spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $spreadsheet->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        $spreadsheet->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
        $no = 1;
        $numrow = 4;
        foreach ($data_pengguna_rptka as $pengguna_rptka) {
            $data_tka = $this->db->get_where('tka', ['id' => $pengguna_rptka['id_tka']])->row_array();
            $data_visa = $this->db->get_where('visa_312', ['id_penghubung_visa' => $pengguna_rptka['id_penghubung_visa312']])->row_array();
            $data_jenis_visa = $this->db->get_where('jenis_visa', ['id' => $pengguna_rptka['id_jenis_visa']])->row_array();
            $data_jabatan = $this->db->get_where('jabatan_rptka', ['id_jabatan_rptka' => $pengguna_rptka['id_jabatan']])->row_array();
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $no);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data_tka['nama_mandarin']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data_tka['nama_latin']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data_tka['passport']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data_tka['kewarganegaraan']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('G' . $numrow, date('d-m-Y', $data_tka['expired_passport']));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data_jenis_visa['visa']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data_jabatan['jabatan']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data_visa['waktu_visa']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('K' . $numrow, date('d-m-Y', $data_visa['tgl_awal']));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data_visa['no_kitas']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('M' . $numrow, date('d-m-Y', $data_visa['tgl_expired']));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $data_visa['ket']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $pengguna_rptka['status']);

            $spreadsheet->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
            $spreadsheet->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);

            $numrow++;
            $no++;
        }

        $numrow += 2;
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $numrow, "NO"); // Set kolom A3 dengan tulisan "NO"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('C' . $numrow, "JABATAN"); // Set kolom B3 dengan tulisan "NIS"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('D' . $numrow, "JUMLAH"); // Set kolom C3 dengan tulisan "NAMA"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('E' . $numrow, "TERPAKAI"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('F' . $numrow, "SISA"); // Set kolom E3 dengan tulisan "TELEPON"

        $spreadsheet->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_col);
        $terpakai = 0;
        $numrow++;
        foreach ($data_jabatan_rptka as $jabatan_rptka) {
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $no);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $jabatan_rptka['jabatan']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $jabatan_rptka['jumlah']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $jabatan_rptka['terpakai']);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $jabatan_rptka['jumlah'] - $jabatan_rptka['terpakai']);
            $terpakai += $jabatan_rptka['terpakai'];
            $spreadsheet->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_col);
            $spreadsheet->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_col);
            $spreadsheet->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_col);
            $spreadsheet->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_col);
            $spreadsheet->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_col);
            $numrow++;
        }

        $numrow++;

        $spreadsheet->setActiveSheetIndex(0)->setCellValue('C' . $numrow, "TOTAL"); // Set kolom A3 dengan tulisan "NO"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data_rptka['jumlah_rptka']); // Set kolom B3 dengan tulisan "NIS"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $terpakai); // Set kolom C3 dengan tulisan "NAMA"
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data_rptka['jumlah_rptka'] - $terpakai); // Set kolom D3 dengan tulisan "JENIS KELAMIN"

        $spreadsheet->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_col);
        $spreadsheet->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_col);

        // Set width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(5); // Set width kolom A
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom B
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom C
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom D
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom F
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom F

        // Set orientasi kertas jadi LANDSCAPE
        $spreadsheet->getActiveSheet()->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=' . $judul . '.xlsx');
        header('Cache-Control: max-age=0');

        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Data RPTKA');

        // Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object

        $writer->save('php://output');
    }
}
