<?php

// Adding Loan in Add Loan form
$action = $_REQUEST['action'];
if (!empty($action)) {
    require_once "../partials/users.php";
    $obj = new Users();
}
if ($action == "addloanaction" && !empty($_POST)) {
    $userData = [
        'Name' => $_POST['Name'],
        'Address' => $_POST['Address'],
        'LoanAccountNo' => $_POST['LoanAccountNo'],
        'DateofDisbursement' => $_POST['DateofDisbursement'],
        'AmountDisbursed' => $_POST['AmountDisbursed'],
        'PrincipalOutstanding' => $_POST['PrincipalOutstanding'],
        'InterestOutstanding' => $_POST['InterestOutstanding'],
        'InterestDemand' => $_POST['InterestDemand'],
        'DateofDemand' => $_POST['DateofDemand'],
        'TotalOutstanding' => $_POST['TotalOutstanding'],
        'PaymentPrincipal' => $_POST['PaymentPrincipal'],
        'PrincipalDue' => $_POST['PrincipalDue'],
        'PaymentInterest' => $_POST['PaymentInterest'],
        'InterestDue' => $_POST['InterestDue'],
        'WrittenOffAmount' => $_POST['WrittenOffAmount'],
        'TotalDue' => $_POST['TotalDue'],
        'StatusOfLoan' => $_POST['StatusofLoan']
    ];
    $SlNo = (!empty($_POST['SlNo'])) ? $_POST['SlNo'] : '';
    if (!empty($SlNo)) {
        $obj->update($userData, $SlNo); //last error not solve yet
    } else {
        $SlNo = $obj->add($userData);
    }
    if (!empty($SlNo)) {
        $data = $obj->getRow('SlNo', $SlNo);
        echo json_encode($data);
        exit();
    }
}
// Get Count Function getalldata action
if ($action == 'getalldata') {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 10;
    $start = ($page - 1) * $limit;
    $data = $obj->getRows($start, $limit); // Corrected parameter order
    if (!empty($data)) {
        $datalist = $data;
    } else {
        $datalist = [];
    }
    $total = $obj->getCount();
    $dataArr = ['count' => $total, 'user' => $datalist];
    echo json_encode($dataArr); // Encode the entire dataArr, not just the datalist
    exit();
}



// Action to perform update
if ($_GET['action'] == 'updateloandata') {
    $loanSlNo = (!empty($_GET['loanSlNo'])) ? $_GET['loanSlNo'] : '';
    if (!empty($loanSlNo)) {
        $loandataupdate = $obj->getRow('SlNo', $loanSlNo);
        echo json_encode($loandataupdate);
        exit();
    }
}