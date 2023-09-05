<!-- <?php -->

// namespace App\Http\Controllers;

// use App\Models\Cases;
// use Illuminate\Http\Request;
// use PDF;
// class PDFController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
    */
//     public function generatePDF()
//     {
//         $case = Cases::get();
  
//         $data = [
//             'title' => 'Associação dos Advogados de Moçambique',
//             'date' => date('m/d/Y'),
//             'case' => $case
//         ]; 
            
//         $pdf = PDF::loadView('case.myPDF', $data);
     
//         return $pdf->download('laraveltuts.pdf');
//     }
// }