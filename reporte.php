<?php
/************************************************************
* Reporte en PDF con FPDF                                   *
*                                                           *
* Fecha:    2021-02-09                                      *
* Autor:  Marko Robles                                      *
* Web:  www.codigosdeprogramacion.com                       *
************************************************************/

include "db_conn.php";
require "fpdf/fpdf.php";



   

    $sql = "SELECT id, marca, modelo, color, comentario, cantidad_lavadoras, valor_carga, peso, lavadora_id, nombre, tipo, valor, peso_lavadora FROM users";
    $resultado = $conn->query($sql);

    $pdf = new FPDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(40, 5, "marca", 1, 0, "C");
    $pdf->Cell(20, 5, "modelo", 1, 0, "C");
    $pdf->Cell(40, 5, "color", 1, 0, "C");
    $pdf->Cell(30, 5, "comentario", 1, 0, "C");
    $pdf->Cell(50, 5, "cantidad de lavadoras", 1, 1, "C");
    $pdf->Cell(50, 5, "valor de carga", 1, 1, "C");
    $pdf->Cell(50, 5, "peso de carga", 1, 1, "C");
    $pdf->Cell(50, 5, "Id lavadora", 1, 1, "C");
    $pdf->Cell(50, 5, "marca lavadora", 1, 1, "C");
    $pdf->Cell(50, 5, "modelo lavadora", 1, 1, "C");
    $pdf->Cell(50, 5, "mvalor", 1, 1, "C");
    $pdf->Cell(50, 5, "peso", 1, 1, "C");

    $pdf->SetFont("Arial", "", 9);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['marca']), 1, 0, "C");
        $pdf->Cell(20, 5, $fila['modelo'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['color'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['comentario'], 1, 0, "C");
        $pdf->Cell(50, 5, $fila['cantidad_lavadoras'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['valor_carga'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['peso'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['lavadora_id'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['nombre'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['tipo'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['valor'], 1, 1, "C");
        $pdf->Cell(50, 5, $fila['peso_lavadora'], 1, 1, "C");

    }

    $pdf->Output();
