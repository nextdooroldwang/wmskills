<?php
// location.href跳转
function href($url)
{
    header("content-type:text/html;charset=utf-8");

    $str = "<script>";
    $str = $str . "window.location.href='" . $url . "';";
    $str = $str . "</script>";
    echo $str;
}

// 先alert然后location.href跳转
function hrefAlert($alertStr, $url)
{
    header("content-type:text/html;charset=utf-8");

    $str = "<script>";
    $str = $str . "alert('" . $alertStr . "');";
    $str = $str . "window.location.href='" . $url . "';";
    $str = $str . "</script>";
    echo $str;
}

// 导出Excel
function exportExcel($fileName, $data, $title)
{
    header("Content-type:application/vnd.ms-excel;;charset=utf-8");
    header("content-Disposition:filename=" . $fileName . ".xls");

    $rows = json_decode($data);

    $str = $title;
    for ($i = 0; $i < count($rows); $i++) {
        $row = $rows[$i];
        for ($j = 0; $j < count($row); $j++) {
            if ($j == (count($row) - 1)) {
                $str = $str . $row[$j] . "\n ";
            } else {
                $str = $str . $row[$j] . "\t ";
            }
        }
    }
    echo $str;
}

// 导出Excel(按照excel模板导出)
function exportExcelByTemplate($inputFileName, $title, $fixedData, $listStartRowNum, $listTitle, $listData, $outputFilename)
{

    Vendor("PHPExcel.PHPExcel");
    Vendor("PHPExcel.PHPExcel.IOFactory");
    Vendor("PHPExcel.PHPExcel.Reader.Excel2007");
    Vendor("PHPExcel.PHPExcel.Writer.Excel2007");

    // 创建Excel2007格式的reader
    $reader = new PHPExcel_Reader_Excel2007();

    // 读取excel模板
    $workbook = $reader->load($inputFileName);

    // 取得第一个sheet
    $sheet = $workbook->getSheet(0);

    // 设置sheet名
    $sheet->setTitle($title);

    // 设置固定部分内容
    foreach ($fixedData as $key => $value) {
        $sheet->setCellValue($key, $value);
    }

    // 设置列表部分内容
    $listLength = count($listData);
    for ($i = 0; $i < $listLength; $i = $i + 1) {
        $rowData = $listData[$i];
        foreach ($listTitle as $key => $value) {
            $sheet->setCellValue($key . $listStartRowNum, $rowData[$value]);
        }

        $listStartRowNum++;
    }

    // 创建Excel2007格式的writer
    $writer = new PHPExcel_Writer_Excel2007($workbook);

    // 写入文件
    $writer->save($outputFilename);

    $fileinfo = pathinfo($outputFilename);
    header('Content-type: application/x-' . $fileinfo['extension']);
    header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
    header('Content-Length: ' . filesize($outputFilename));
    readfile($outputFilename);
    unlink($outputFilename);
    exit();
}

// 导出Excel(按照excel模板导出)
function exportExcelByTemplateDouble($inputFileName, $title, $fixedData, $listStartRowNum, $listTitleLeft, $listTitleRight, $listData, $outputFilename)
{

    Vendor("PHPExcel.PHPExcel");
    Vendor("PHPExcel.PHPExcel.IOFactory");
    Vendor("PHPExcel.PHPExcel.Reader.Excel2007");
    Vendor("PHPExcel.PHPExcel.Writer.Excel2007");

    // 创建Excel2007格式的reader
    $reader = new PHPExcel_Reader_Excel2007();

    // 读取excel模板
    $workbook = $reader->load($inputFileName);

    // 取得第一个sheet
    $sheet = $workbook->getSheet(0);

    // 设置sheet名
    $sheet->setTitle($title);

    // 设置固定部分内容
    foreach ($fixedData as $key => $value) {
        $sheet->setCellValue($key, $value);
    }

    // 设置列表部分内容
    $listLength = count($listData);
    for ($i = 0; $i < $listLength; $i = $i + 2) {
        $rowDataLeft = $listData[$i];
        foreach ($listTitleLeft as $key => $value) {
            $sheet->setCellValue($key . $listStartRowNum, $rowDataLeft[$value]);
        }

        if ($i < ($listLength - 1)) {
            $rowDataRight = $listData[$i + 1];

            foreach ($listTitleRight as $key => $value) {
                $sheet->setCellValue($key . $listStartRowNum, $rowDataRight[$value]);
            }
        }

        $listStartRowNum++;
    }

    // 创建Excel2007格式的writer
    $writer = new PHPExcel_Writer_Excel2007($workbook);

    // 写入文件
    $writer->save($outputFilename);

    $fileinfo = pathinfo($outputFilename);
    header('Content-type: application/x-' . $fileinfo['extension']);
    header('Content-Disposition: attachment; filename=' . $fileinfo['basename']);
    header('Content-Length: ' . filesize($outputFilename));
    readfile($outputFilename);
    unlink($outputFilename);
    exit();
}
