<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Post;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PageController extends Controller
{
    public function index()
    {
        try {
            //code...
            $products = Product::orderBy('created_at', 'desc')->paginate(20);
            $posts = Post::orderBy('created_at', 'desc')->paginate(20);
            return view('index', compact(['products', $products, 'posts', $posts]));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Contact
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Contact us
     */
    public function contactUs(Request $request)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.eu.mailgun.org';
        $mail->SMTPAuth = true;
        $mail->Username = 'user@example.com';
        $mail->Password = 'secret';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;          // Port->2525
        $mail->From = $request->email;
        $mail->FromName = $request->name;
        $mail->addAddress('autikifa870@gmail.com', 'autikifa870@gmail.com');
        $mail->addReplyTo('autikifa870@gmail.com', 'Autikifa Admin');
        $mail->isHTML(true);
        // Mail content
        $mailContent = "<h1>Dear Autikifa Admin</h1>
        <p>You have a new contact request from autikifa.com website. Please see information below</br>
        <div>
            <p><h4>Fullname: $request->name;</h4> </br></p>
            <p><h4>Email: $request->email;</h4> </br></p>
            <p><h4>Message: $request->message ? $request->message : '' ;</h4> </br></p>
            
        </div>

        <p>Thank you.</p>
        <p>Regards,</p>
        <p>Auti kifa</p>";
        $mail->Subject = 'New Contact Request';
        $mail->Body = $mailContent;
        $mail->AltBody = "Hello, Admin! \n How are you?";

        try {
            $mail->send();
            return redirect()->back()->with('success', ' Message sent!');

        }catch (\Throwable $th){
            //throw $th;
            return back()->with('error', 'Internal server error');

        }
    }

    /**
     * Show post details by geting it uuid and get listing od posts too
     */
    public function single($uuid)
    {
        try {
            //code...
            $post = Post::where('uuid' ,$uuid)->first();
            $posts = Post::inRandomOrder()->paginate(20);
            return view('single', compact(['post', $post, 'posts', $posts]));
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error ', 'Internal server error');
        }
    }
}
