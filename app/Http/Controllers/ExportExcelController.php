<?php

namespace App\Http\Controllers;

use App\Jobs\DownloadExcelVentasAllJob;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\VentasExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportExcelController extends Controller
{
    /**
     * Exportar en EXCEL todas las ventas
     */
    public function exportExcelVentasAll(): RedirectResponse
    {
        $filename = 'ventas_' . now()->format('Y_m_d_His') . '.xlsx';
        DownloadExcelVentasAllJob::dispatch($filename, Auth::id());

        return redirect()->route('ventas.index')->with('success', 'Procesando descarga');
    }

    /**
     * Exportar y descargar inmediatamente el archivo Excel con todas las ventas
     * Retorna la descarga directa del archivo generado
     */
    public function exportExcelVentasAllNow()
    {
        $filename = 'ventas_' . now()->format('Y_m_d_His') . '.xlsx';
        return Excel::download(new VentasExport, $filename);
    }
}
