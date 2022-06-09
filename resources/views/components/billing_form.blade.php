<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="Send invoice" aria-hidden="true" id="addBill">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf

                    <div class="form-group">
                        <select class="nice_Select mb_30 form-control" id="service-text">
                            <option data-display="Select a service">Nothing</option>
                            <option value="1">Service 001</option>
                            <option value="2">Service 002</option>
                            <option value="3">Service 003</option>
                            <option value="4">Service 004</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Recipient name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="phone" name="name" placeholder="Recipient phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>
