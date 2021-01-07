<?php
require('../fpdf.php');
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$html='<html>
<head><style>
body{font-size:14px;}
p{font-size:20px;text-align:center;}
b.right{float:right;}
ol ol{list-style-type:lower-alpha}
  </style>
</head>
<body>
<div class="container"> <p>LearnIntern.com<br>Agreement for Online Video Chat Trainings</p><br>
  <div class="element">
  This agreement is to be entered on '.date("d-m-y", strtotime($_POST['date'])).'(Effective Date) by and between the parties as mentioned below:<br>
'.$_POST['name'].', here after referred as Trainee <br>
And<br>
Essential Services Outsource Private Limited (Through LearnIntern.com) here after referred as the Trainer.<br><br>
<b>WHEREAS</b>,
<ol>
<li>  The Trainer is a service provider, who has 15+ years experience in placements and has a great team of people with exceptional amount of experience and through the website placementconultancy.in, the Trainer is providing the platform for job seekers to get desired jobs along with Online Video Chat trainings in Digital Marketing, Website creation, Interview Preparation and other courses the Trainer has to offer, all of which has been elaborately listed in the website.</li>
<li>  The Trainee is a person showing interest and is willing to enrol and attend the Online Video Chat trainings as provided by the Trainer.</li>
<li>  The parties hereto desire to enter into this Agreement to define and set forth the terms and conditions of the Online video chat training as provided by the Trainer;</li></ol><br>

<b>NOW, THEREFORE</b>, in consideration of the mutual covenants and agreements set forth below, it is hereby covenanted and agreed by the Trainer and the Trainee as follows:<br>
<ol>
<li><b>Terms of Agreement:</b> This Agreement is entered upon by and between the aforesaid parties, whereby the Trainer agrees to provide Online Video Chat Trainings, through their website LearnIntern.com on various courses enlisted under Digital Marketing, Website Creation, Interview Preparation and other courses the Trainer has to offer, whereby the Trainer agrees to enrol and attend one or more of the above courses.</li>

<li>  <b>Relation between the Parties:</b>
Nothing contained herein shall be construed as establishing a relation of master and servant or of agent and principal as between the Trainer and the Trainee. This Agreement is not a job offer or confirmation of appointment for any job, it is only for providing Online Video Chat Trainings that the Trainer has to offer and whereby the Trainee agrees to enrol and attend.</li>

<li>  <b>Period of Training:</b> The training period can last anywhere between 3 to 6 months, depending on the course and the content, the Trainer has to provide.</li>

<li>  <b>Mode of Training:</b> The Training will be conducted in online mode only via Recorded videos, Video chats, Soft Copy of materials and Online Training content.</li>

<li>  <b>Personal Information:</b>  The trainee in order to enrol and start the training, needs to provide mobile number, email-id ID Proof cum Address proof, Photographs, Resume and receipt of payment slip after the payment has been made through screenshot or pictures. Where after the Trainer ensures that the Information will be used for maintaining records for training purposes only and agrees to maintain the complete security Confidentiality of the Information as provided by the Trainee. </li>

<li><b> Essential Resources:</b> The trainee has to ensure that they have a computer and have good access to internet before beginning the Course they enrolled for. The Trainee will not be eligible if they don’t have a Computer or internet access thus, with this agreement the Trainee is agreeing that they are to pay in full amount for the Training and they have Complete access to Computer with good internet Connectivity.</li>

<li>  <b>Tests & Internships: </b> The Trainee has to undergo regular tests as provided by the Trainer from time to time, within the duration of the Training. The trainee might also be provided with a good internship experience depending on their performance and availability of the internships. </li>

<li><b> Payment:</b> The fee structure for the online video trainings is described in the annexures of this agreement.</li>

<li>  <b>Refund Policy:</b> The course will start immediately once we receive the payment and acknowledgement will be sent via email and SMS alert to the registered number. The Payment once made is non-refundable and the course stared has to be completed, therefore the Trainee needs to ensure that s/he is completely willing to start the Course and Complete it in the stipulated time period.</li>

<li>  <b>Certification:</b> The Trainee after the successful completion will be provided with a certificate of completion of the course along with a letter of recommendation if the Trainee undergoes any internship.</li>

<li><b> Rights and Liabilities: </b></li>
<ol>
<li>  The Trainer reserves of all of its rights to special relief such as injunction or any other relief available to them, as per the Applicable Laws in case a dispute arises between the parties. </li>
<li>  The Trainer reserves the right to gather the information of the Trainee and agrees to have the best available security available to offer for protection of the Personal Information of the Trainee. </li>
<li>The Trainer will not be liable to return any of the amount paid in case the Trainee decides to leave the course before completion. The courses are non-refundable.</li></ol>

<li>  <b>Termination of the Agreement:</b> This agreement will be terminated immediately if:</li>
<ol>
<li>  The trainee, in the duration of the Training, uses any obscene or vulgar language, sharing of any obscene or pornographic or anti-social messages, texts, images or videos.</li>
<li>  The Trainee violates any of the clause of the agreement.</li>
<li>  The Trainee is absent from the training for a continuous period of 7 days without any prior notice.</li></ol>

<li>  <b>Modification:</b> The Agreement shall be modified with the consent of the parties, shall be done so in written and shall be signed by the parties hereto.</li>

<li><b>Severability:</b>
The parties agree that if any of the terms or potion of this agreement is found to be void or unenforceable, shall be struck from the record and the remaining terms and portions shall remain intact and retain its full force and effect.</li>

<li><b> Jurisdiction: </b> The Agreement will be governed as per the laws of Union of India.</li>

<li><b> Waiver: </b> Any waiver of a default under this Agreement must be made in writing and shall not be a waiver of any other default concerning the same or any other provision of this Agreement.  No delay or omission in the exercise of any right or remedy shall impair such right or remedy or be constructed as a waiver.  A consent to or approval of any act shall not be deemed to waive or render unnecessary consent to or approval of any other or subsequent act.</li>
<li><b>Annexures:</b> The annexures accompanied with this agreement will be treated as the potion of this agreement.</li>

<li><b> Entire Agreement:</b> This Agreement with all of the clauses and annexures shall be treated as one Entire Agreement.</li>
</ol>
<br>
<br>

IN WITNESS WHEREOF, THE UNDERSIGNED STATE THAT THEY HAVE CAREFULLY READ THIS AGREEMENT AND KNOW AND UNDERSTAND THE CONTENTS THEREOF AND THAT THEY AGREE TO BE BOUND AND ABIDE BY THE REPRESENTATIONS, COVENANTS, PROMISES, TERMS AND CONDITIONS CONTAINED HEREIN.<br><br>

<b>Date: </b>'.date("d-m-y").' <br>
                                           <b class="right">[Essential Services Outsource Private Limited]</b><br>

<b>Date: </b>'.date("d-m-y").'<br>
                                                                      <b class="right"> Trainee</b><br><br>

<b>Declaration by Trainee</b><br><br>

By your signature below you acknowledge that you have read and understood the foregoing Agreement, that you agree to comply with all of the terms of the Agreement, and that you have received a copy of the Agreement.<br><br><br><br>

<b>Date: </b>'.date("d-m-y").'<br>
                                                                           <b class="right">Trainee</b>

</div>
</form>

</div>
</body>
</html>';


$pdf=new FPDF();
$pdf->Addpage();
$dompdf= new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("Agreement-for-online-video-chat-trainings_".$_POST['name'],array('attachment' => 0));
?>
