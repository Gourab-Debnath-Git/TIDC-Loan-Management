// Pagination
function pagination(totalpages, currentpage) {
    var pagelist = "";
    if (totalpages > 1) {
        currentpage = parseInt(currentpage);
        pagelist += `<ul class="pagination pagination-sm">`;
        const prevClass = currentpage == 1 ? "disabled" : "";
        const prevClassRmv = currentpage == 1 ? "none" : "";
        pagelist += `<li class="page-item ${prevClass}"><a class="page-link" href="#" data-page="${currentpage - 1}">Previous</a></li>`;
        for (let p = 1; p <= totalpages; p++) {
            const activeClass = currentpage == p ? "active" : "";
            pagelist += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }
        const nextClass = currentpage == totalpages ? "disabled" : "";
        pagelist += `<li class="page-item ${nextClass}"><a class="page-link" href="#" data-page="${currentpage + 1}">Next</a></li>`;
        pagelist += `</ul>`;
    }
    $("#pagination").html(pagelist);
}



// Function to retrieve loan information from the database
function getData() {
    var pageno = $("#currentPage").val();
    $.ajax({
        url: "/TIDCLoanManagement/includes/ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageno, action: 'getalldata' },
        beforeSend: function () {
            console.log("Wait... getData is Loading");
        },
        success: function (rows) {
            console.log(rows);
            if (rows.user) {
                var loandatalist = "";
                $.each(rows.user, function (index, loandata) {
                    loandatalist += getloandatarow(loandata);
                });
                $("#loandataTable tbody").html(loandatalist);
                let totalNumberofitm = rows.count; 
                console.log(totalNumberofitm);
                let totalpages = Math.ceil(parseInt(totalNumberofitm) / 10);
                const currentpage = $("#currentPage").val();
                pagination(totalpages, currentpage);
            }
        },
        error: function (request, error) {
            console.log(arguments);
            console.log("Error:" + error);
        },
    });
}





// Function to getting loandata from database
function getloandatarow(loandata){
var loandatarow = "";
if (loandata) {
    loandatarow = `
    <tr>
    <td>${loandata.SlNo}</td>
    <td>${loandata.Name}</td>
    <td>${loandata.Address}</td>
    <td>${loandata.LoanAccountNo}</td>
    <td>${loandata.DateofDisbursement}</td>
    <td>${loandata.AmountDisbursed}</td>
    <td>${loandata.PrincipalOutstanding}</td>
    <td>${loandata.InterestOutstanding}</td>
    <td>${loandata.InterestDemand}</td>
    <td>${loandata.DateofDemand}</td>
    <td>${loandata.TotalOutstanding}</td>
    <td>${loandata.PaymentPrincipal}</td>
    <td>${loandata.PrincipalDue}</td>
    <td>${loandata.PaymentInterest}</td>
    <td>${loandata.InterestDue}</td>
    <td>${loandata.WrittenOffAmount}</td>
    <td>${loandata.TotalDue}</td>
    <td>${loandata.StatusOfLoan}</td>
    <td>
    <a href="#" class="me-1" data-bs-toggle="modal" data-bs-target="#profileMadal" title="Profile" data-SlNo=${loandata.SlNo}><i class="fa-solid fa-eye see-icon text-primary"></i></a>
    <a href="#" class="me-1 updateloan" id="updateloan" data-bs-toggle="modal" data-bs-target="#addLoanModal" title="Update" data-slno="${loandata.SlNo}"> <i class="fa-solid fa-pen-to-square edit-icon text-success"></i></a>
    <a href="#" class="me-1" title="Close" data-SlNo=${loandata.SlNo}><i class="fa-solid fa-trash delete-icon text-danger"></i></a>
    <a href="#" class="me-1" data-bs-toggle="modal" data-bs-target="#historyModal" title="History" data-SlNo=${loandata.SlNo}><i class="fa-solid fa-inbox text-warning"></i></a>
    </td>
</tr>
    `;
}
return loandatarow;
}



$(document).ready(function () {
    // Add Loan
    $(document).on("submit", "#addloanform", function (e) {
        e.preventDefault();
        $.ajax({
            url: "/TIDCLoanManagement/includes/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                console.log("Wait...Add Loan Data is Loading");
            },
            success: function (response) {
                console.log(response);
                if(response){
                    $("#addLoanModal").modal('hide');
                    $("#addloanform")[0].reset();
                    getData();
                }
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error:" + error);
            },
        });
    });

    $(document).on("click", ".pagination li a", function(e) {
        e.preventDefault();
        const pagenum = $(this).data("page");
        $("#currentPage").val(pagenum);
        getData(); // Corrected function name
    });
    



    $(document).on("click", "a.updateloan", function(){
        var loanSlNo = $(this).data("slno");
        $.ajax({
            url: "/TIDCLoanManagement/includes/ajax.php",
            type: "GET",
            dataType: "json",
            data: { loanSlNo: loanSlNo, action: 'updateloandata' },
            beforeSend: function () {
                console.log("Wait...");
            },
            success: function (rows) {
                console.log(rows);
                if(rows){
                    $("#Name").val(rows.Name);
                    $("#Address").val(rows.Address);
                    $("#LoanAccountNo").val(rows.LoanAccountNo);
                    $("#DateofDisbursement").val(rows.DateofDisbursement);
                    $("#AmountDisbursed").val(rows.AmountDisbursed);
                    $("#PrincipalOutstanding").val(rows.PrincipalOutstanding);
                    $("#InterestOutstanding").val(rows.InterestOutstanding);
                    $("#InterestDemand").val(rows.InterestDemand);
                    $("#DateofDemand").val(rows.DateofDemand);
                    $("#TotalOutstanding").val(rows.TotalOutstanding);
                    $("#PaymentPrincipal").val(rows.PaymentPrincipal);
                    $("#PrincipalDue").val(rows.PrincipalDue);
                    $("#PaymentInterest").val(rows.PaymentInterest);
                    $("#InterestDue").val(rows.InterestDue);
                    $("#WrittenOffAmount").val(rows.WrittenOffAmount);
                    $("#TotalDue").val(rows.TotalDue);
                    $("#StatusofLoan").val(rows.StatusOfLoan);
                }
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error:" + error);
            }
        });
    });
    
    
    getData();
});



