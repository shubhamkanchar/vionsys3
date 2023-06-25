<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/career', function () {
    return view('pages.career');
})->name('career');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::name('service.')->prefix('service')->group(function () {
    Route::get('/software-development', function () {
        return view('pages.services.software-development');
    })->name('software-development');

    Route::get('/AI', function () {
        return view('pages.services.ai');
    })->name('ai');

    Route::get('/application-development-maintenance', function () {
        return view('pages.services.app-dev-main');
    })->name('app-dev-main');

    Route::get('/product-development', function () {
        return view('pages.services.product-development');
    })->name('product-development');

    Route::get('/business-intelligence-and-analytics', function () {
        return view('pages.services.bi-and-analytics');
    })->name('bi-and-analytics');

    Route::get('/bigdata', function () {
        return view('pages.services.bigdata');
    })->name('bigdata');

    Route::get('/cloud-computing', function () {
        return view('pages.services.cloud-computing');
    })->name('cloud-computing');

    Route::get('/devops', function () {
        return view('pages.services.devops');
    })->name('devops');

    Route::get('/product-development', function () {
        return view('pages.services.product-development');
    })->name('product-development');

    Route::get('/staffing', function () {
        return view('pages.services.staffing');
    })->name('staffing');

    Route::get('/strategy-consulting', function () {
        return view('pages.services.strategy-consulting');
    })->name('strategy-consulting');

    Route::get('/testing-and-QA', function () {
        return view('pages.services.testing-and-qa');
    })->name('testing-and-qa');

    Route::get('/webdev', function () {
        return view('pages.services.webdev');
    })->name('webdev');
});

Route::name('tech.')->prefix('technology')->group(function () {
    Route::get('/java', function () {
        return view('pages.tech.java');
    })->name('java');
    Route::get('/angular', function () {
        return view('pages.tech.angular');
    })->name('angular');
    Route::get('/data-science', function () {
        return view('pages.tech.data-science');
    })->name('data-science');
    Route::get('/dotnet', function () {
        return view('pages.tech.dotnet');
    })->name('dotnet');
    Route::get('/erp-crm', function () {
        return view('pages.tech.erp');
    })->name('erp');
    Route::get('/hadoop', function () {
        return view('pages.tech.hadoop');
    })->name('hadoop');
    Route::get('/microsoft', function () {
        return view('pages.tech.microsoft');
    })->name('microsoft');
    Route::get('/oracle', function () {
        return view('pages.tech.oracle');
    })->name('oracle');
    Route::get('/python', function () {
        return view('pages.tech.python');
    })->name('python');
    Route::get('/saleforce', function () {
        return view('pages.tech.saleforce');
    })->name('saleforce');
    Route::get('/sap', function () {
        return view('pages.tech.sap');
    })->name('sap');
    Route::get('/scripting', function () {
        return view('pages.tech.scripting');
    })->name('scripting');
});

Route::name('industry.')->prefix('industry')->group(function () {
    Route::get('/banking', function () {
        return view('pages.industries.banking');
    })->name('banking');
    Route::get('/education', function () {
        return view('pages.industries.education');
    })->name('education');
    Route::get('/field-services', function () {
        return view('pages.industries.field-services');
    })->name('field-services');
    Route::get('/health-care', function () {
        return view('pages.industries.health-care');
    })->name('health-care');
    Route::get('/insurance', function () {
        return view('pages.industries.insurance');
    })->name('insurance');
    Route::get('/pharma', function () {
        return view('pages.industries.pharma');
    })->name('pharma');
    Route::get('/professional-services', function () {
        return view('pages.industries.professional-services');
    })->name('professional-services');
});


Route::name('expertise.')->prefix('expertise')->group(function () {
    Route::get('/application-security', function () {
        return view('pages.expertise.application-security');
    })->name('application-security');
    Route::get('/project-management', function () {
        return view('pages.expertise.project-management');
    })->name('project-management');
    Route::get('/qa-software-testing', function () {
        return view('pages.expertise.qa-software-testing');
    })->name('qa-software-testing');
});

Route::post('send-mail', [MailController::class, 'index'])->name('send_mail');