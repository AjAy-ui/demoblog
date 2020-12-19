<?php 
/*
* Template Name: Ajax
*/
// require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

switch ($_POST['action']) {
  case 'contact':
    if (!check_ajax_referer( 'woocommerce-contact' )){
      wp_die();
    }
    if (isset($_POST)) {
      $contact_name = $_POST['contact_name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message  = $_POST['message'];
      $tablename = $wpdb->prefix."contact";
      $wpdb->insert($tablename, array('contact_name' => $contact_name,'email' => $email,'subject' => $subject,'message' => $message),array('%s','%s','%s','%s'));
      echo "success";
    }
    break;
    case 'payment_update':
    if (isset($_POST)) {
      $contact_name = $_POST['contact_name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $payment_id  = $_POST['payment_id'];
      $tablename = $wpdb->prefix."payments";
      $wpdb->insert($tablename, array('contact_name' => $contact_name,'email' => $email,'mobile' => $mobile,'payment_id' => $payment_id),array('%s','%s','%s','%s'));
      echo "success";
    }
    break;
  case 'subscribe':
    if (isset($_POST)) {
      $sub_email = $_POST['sub_email'];
      $tablename = $wpdb->prefix."subscribe";
      $wpdb->insert($tablename, array('sub_email' => $sub_email),array('%s'));
      echo "success";
    }
    break;
    case 'volunteer':
    if (isset($_POST)) {
      $volunteer_name = $_POST['volunteer_name'];
      $dob = $_POST['dob'];
      $hus_name = $_POST['hus_name'];
      $address = $_POST['address'];
      $aadhar = $_POST['aadhar'];
      $edu_qualification = $_POST['edu_qualification'];
      $contact_num = $_POST['contact_num'];
      $job = $_POST['job'];
      $tablename = $wpdb->prefix."volunteer";
      $wpdb->insert($tablename, array('volunteer_name' => $volunteer_name,'dob' => $dob,'hus_name' => $hus_name,'address' => $address,'aadhar' => $aadhar,'edu_qualification' => $edu_qualification,'contact_num' => $contact_num,'job' => $job),array('%s','%s','%s','%s','%s','%s','%s','%s'));
      echo "success";
    }
    break;
  
  default:
    break;
}