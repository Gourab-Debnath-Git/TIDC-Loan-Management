
<div class="modal fade modal-xl" id="addLoanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Loan Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" id="addloanform" method="POST">
            <div class="col-md-3">
              <label for="Name" class="form-label">Name</label>
              <input type="text" id="Name" name="Name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="col-md-9">
              <label for="Address" class="form-label">Address</label>
              <input type="text" id="Address" name="Address" class="form-control" placeholder="Enter Address">
            </div>
            <div class="col-md-3">
              <label for="LoanAccountNo" class="form-label">Loan Account No</label>
              <input type="text" id="LoanAccountNo" name="LoanAccountNo" class="form-control"
                placeholder="Enter Loan Account Number">
            </div>
            <div class="col-md-3">
              <label for="DateofDisbursement" class="form-label">Date of Disbursement</label>
              <input type="text" id="DateofDisbursement" name="DateofDisbursement" class="form-control"
                placeholder="Enter Date of Disbursement">
            </div>
            <div class="col-md-3">
              <label for="AmountDisbursed" class="form-label">Amount Disbursed</label>
              <input type="number" id="AmountDisbursed" name="AmountDisbursed" class="form-control"
                placeholder="Enter Amount Disbursed">
            </div>
            <div class="col-md-3">
              <label for="PrincipalOutstanding" class="form-label">Principal Outstanding</label>
              <input type="number" id="PrincipalOutstanding" name="PrincipalOutstanding" class="form-control"
                placeholder="Enter Principal Outstanding">
            </div>
            <div class="col-md-3">
              <label for="InterestOutstanding" class="form-label">Interest Outstanding</label>
              <input type="number" id="InterestOutstanding" name="InterestOutstanding" class="form-control"
                placeholder="Enter Interest Outstanding">
            </div>
            <div class="col-md-3">
              <label for="InterestDemand" class="form-label">Interest Demand</label>
              <input type="number" id="InterestDemand" name="InterestDemand" class="form-control"
                placeholder="Enter Interest Demand">
            </div>
            <div class="col-md-3">
              <label for="DateofDemand" class="form-label">Date of Demand</label>
              <input type="text" id="DateofDemand" name="DateofDemand" class="form-control"
                placeholder="Enter Date of Demand">
            </div>
            <div class="col-md-3">
              <label for="TotalOutstanding" class="form-label">Total Outstanding</label>
              <input type="number" id="TotalOutstanding" name="TotalOutstanding" class="form-control"
                placeholder="Enter Total Outstanding">
            </div>
            <div class="col-md-3">
              <label for="PaymentPrincipal" class="form-label">Payment Principal</label>
              <input type="number" id="PaymentPrincipal" name="PaymentPrincipal" class="form-control"
                placeholder="Enter Payment Principal">
            </div>
            <div class="col-md-3">
              <label for="PrincipalDue" class="form-label">Principal Due</label>
              <input type="number" id="PrincipalDue" name="PrincipalDue" class="form-control"
                placeholder="Enter Principal Due">
            </div>
            <div class="col-md-3">
              <label for="PaymentInterest" class="form-label">Payment Interest</label>
              <input type="number" id="PaymentInterest" name="PaymentInterest" class="form-control"
                placeholder="Enter Payment Interest">
            </div>
            <div class="col-md-3">
              <label for="InterestDue" class="form-label">Interest Due</label>
              <input type="number" id="InterestDue" name="InterestDue" class="form-control"
                placeholder="Enter Interest Due">
            </div>
            <div class="col-md-3">
              <label for="WrittenoffAmount" class="form-label">Written off Amount</label>
              <input type="number" id="WrittenOffAmount" name="WrittenOffAmount" class="form-control"
                placeholder="Enter Written off Amount">
            </div>
            <div class="col-md-3">
              <label for="TotalDue" class="form-label">Total Due</label>
              <input type="number" id="TotalDue" name="TotalDue" class="form-control" placeholder="Enter Total Due">
            </div>
            <div class="col-md-3">
              <label for="StatusofLoan" class="form-label">Status of Loan</label>
              <input type="text" id="StatusofLoan" name="StatusofLoan" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark" value="submit">Submit Loan</button>
          <input type="hidden" name="action" value="addloanaction">
          <input type="hidden" name="SlNo" id="SlNo" value="">
        </div>
      </form>
    </div>
  </div>
</div>
