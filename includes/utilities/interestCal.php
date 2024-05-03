<div class="modal fade" id="interestCalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: #0fa">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Interest Calculator</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3 row">
                      <label for="principal" class="col-sm-4 col-form-label">Principal Amount:</label>
                      <div class="col-sm-8">
                          <input type="number" class="form-control" id="principal" placeholder="Enter principal amount">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="rate" class="col-sm-4 col-form-label">Interest Rate (% per annum):</label>
                      <div class="col-sm-8">
                          <input type="number" class="form-control" id="rate" placeholder="Enter interest rate">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="start-date" class="col-sm-4 col-form-label">Start Date:</label>
                      <div class="col-sm-8">
                          <input type="date" class="form-control" id="start-date">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="end-date" class="col-sm-4 col-form-label">End Date:</label>
                      <div class="col-sm-8">
                          <input type="date" class="form-control" id="end-date">
                      </div>
                    </div>
                    <div id="result"></div>
                  </div>
                  <div class="modal-footer">
                    <button onclick="calculateInterest()" class="btn btn-info">Calculate Interest</button>
                  </div>
                </div>
              </div>
        </div>