<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Backend\Master\DashboardDetail;
use App\Http\Livewire\Backend\Master\DashboardIndex;
use App\Http\Livewire\Backend\Master\UnitGroupIndex;
use App\Http\Livewire\Backend\Master\UserIndex;
use App\Http\Livewire\Backend\Setting\DokumentIndex;
use App\Http\Livewire\Document\DocumentForm;
use App\Http\Livewire\Document\DocumentKategori;
use App\Http\Livewire\Document\DocumentKontrol;
use App\Http\Livewire\Document\DocumentList;
use App\Http\Livewire\Document\DocumentLog;
use App\Http\Livewire\Document\DocumentUnit;
use App\Http\Livewire\Document\DocumentUpdate;
use App\Http\Livewire\Document\DocumentView;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'cekbrowser'])->name('dashboard');



Route::middleware('auth', 'cekbrowser')->group(function () {
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('/dashboard-detail/{param?}', DashboardDetail::class)->name('dashboard.detail');
    Route::get('/document-index', DokumentIndex::class)->name('document.index');
    Route::get('/document-form', DocumentForm::class)->name('document.form');
    Route::get('/document-katagori', DocumentKategori::class)->name('document.katagori');
    Route::get('/document-list', DocumentList::class)->name('document.list');
    Route::get('/document-log', DocumentLog::class)->name('document.log');
    Route::get('/document-view/{param?}', DocumentView::class)->name('document.view');
    Route::get('/document-update/{param?}', DocumentUpdate::class)->name('document.update');
    Route::get('/document-unit/{param?}', DocumentUnit::class)->name('document.unit');
     Route::get('/document-kontrol', DocumentKontrol::class)->name('document.kontrol');

    Route::get('/unit-group', UnitGroupIndex::class)->name('unit.group');
    Route::get('/user-index', UserIndex::class)->name('user.index');
});
require __DIR__ . '/auth.php';