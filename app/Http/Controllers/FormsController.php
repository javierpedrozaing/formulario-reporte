<?php

namespace App\Http\Controllers;

use App\Forms;
use Illuminate\Http\Request;
use DB;
use PDF;
use App;
use Mail;


class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Forms::get();
        return view('forms/list', ['forms' => $forms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataform = $request->all();

        try {

                //return $dataform['ticket'];exit();
                $data=array('ticket_number' => $dataform['ticket'],
                'customer_name' => $dataform['customer_name'],
                'customer_address' => $dataform['address'],
                'customer_phone' => $dataform['phone'],
                'contact_name' => $dataform['contact_name'],
                'customer_position' => $dataform['position'],
                'customer_email' => $dataform['customer_email'],
                'activity_type' => $dataform['activity_type'],
                'pc_type' => $dataform['pc_type'],
                'pc_serial' => $dataform['pc_serial'],
                'date' => $dataform['date'],
                'initial_hour' => $dataform['initial_hour'],
                'final_hour' => $dataform['final_hour'],
                'total_time' => $dataform['total_time'],
                'observations' => $dataform['observations'],
                'other_activity_type' => $dataform['other-activity'],
                'customer_sign_name' => $dataform['customer_sign_name'],
                'customer_sign_position' => $dataform['customer_sign_position'],
                'customer_sign' => $dataform['customer_sign'],
                'customer_date' => $dataform['customer_date'],
                'ps_sign_name' => $dataform['ps_sign_name'],
                'ps_sign_position' => $dataform['ps_sign_position'],
                'ps_sign' => $dataform['ps_sign'],
                'ps_date' => $dataform['ps_date'],
                'service_qualification' => $dataform['service_qualification'],
                'service_comments' => $dataform['service_comments'],
                'created_at' => date("m/d/y"),
                'updated_at' => date("m/d/y"));


            DB::table('forms')->insert($data);

            return response()->json([
                'code' => 200,
                'status' => 'Formulario guardado exitosamente'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 404,
                'status' => 'Todos los campos son requeridos',
                'error' => $th,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Forms::find($id);
        return view('forms.show', ['form' => $data]);
    }

    public function edit($id){
        $data = Forms::find($id);
        return view('forms.edit', ['form' => $data]);
    }

    public function update(Request $request){
        $dataform = $request->all();
        $current_form = Forms::find($dataform['formId']);
        
        $customer_sign = isset($dataform['customer_sign']) ? $dataform['customer_sign'] : $current_form->customer_sign ;
        
                
            $data = array('customer_name' => $dataform['customer_name'],
            'customer_address' => $dataform['address'],
            'customer_phone' => $dataform['phone'],
            'contact_name' => $dataform['contact_name'],
            'customer_position' => $dataform['position'],
            'customer_email' => $dataform['customer_email'],
            'customer_sign_name' => $dataform['customer_sign_name'],
            'customer_sign_position' => $dataform['customer_sign_position'],
            'customer_sign' => $customer_sign,
            'customer_date' => $dataform['customer_date']);
                    
            DB::table('forms')->where('id',$dataform['formId'])->update($data);

            return response()->json([
                'code' => 200,
                'status' => 'Fromulario actualizado exitosamente'
            ]);

        
        
    }


    public function downloadPDF($id_form){

        $form = Forms::find($id_form);

        $ps_sign = $form->ps_sign;
        $customer_sign = $form->customer_sign;

        $path = public_path('/uploads/');

        $img_customer = str_replace('data:image/png;base64,', '', $customer_sign);
        $img_customer = str_replace(' ', '+', $img_customer);
        $data_customer = base64_decode($img_customer);
        $file_customer = $path . 'customer-'.$form->id. '.png';
        $success_customer = file_put_contents($file_customer , $data_customer);

        $img_ps = str_replace('data:image/png;base64,', '', $ps_sign);
        $img_ps = str_replace(' ', '+', $img_ps);
        $data_ps = base64_decode($img_ps);
        $file_ps = $path . 'ps-'.$form->id. '.png';
        $success_ps = file_put_contents($file_ps, $data_ps);


        PDF::setOptions(['isHtml5ParserEnabled', true]);

        $customer_email = $form->customer_email;
        $pdf = PDF::loadView('forms.pdf2', compact('form'));

        $streamPDF = $pdf->stream();


        Mail::send('email', (array) $form, function ($mail) use ($pdf, $customer_email) {
            $mail->subject('Pdf generado desde sitio web');
            $mail->from('bar@foo.com', 'Formulario en Pdf');
            $mail->to($customer_email);
            $mail->attachData($pdf->output(), 'test.pdf');
        });


        return $streamPDF;
        //return $pdf->download('formulario.pdf');


    }
}
