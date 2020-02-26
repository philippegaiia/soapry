        <div class="form-group">
            <label for="order_ref">Numéro de Commande</label>
            <input type="text" name="order_ref" value="{{ old('order_ref') ?? $order->order_ref ?? $supplier->code . '-' . now()->format('ymd-s')}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('order_ref') }}</small>
         </div>

        <div class="form-group">
            <label for="order_date">Date Commande</label>
            <input type="date" name="order_date" value="{{ old('order_date') ?? $order->order_date}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('order_date') }}</small>
        </div>

        <div class="form-group">
            <label for="delivery_date">Date Livraison</label>
            <input type="date" name="delivery_date" value="{{ old('delivery_date') ?? $order->delivery_date}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('delivery_date') }}</small>
        </div>

        <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="" disabled>Sélectionner une situation</option>
            @foreach ($order->statusOptions() as $statusOptionKey => $statusOptionValue)
                <option value="{{ $statusOptionKey }}" {{ $order->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
            <label for="confirmation_no">Numéro de Confirmation</label>
            <input type="text" name="confirmation_no" value="{{ old('confirmation_no') ?? $order->confirmation_no}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('confirmation_no') }}</small>
         </div>

        <div class="form-group">
            <label for="bl_no">Numéro de BL</label>
            <input type="text" name="bl_no" value="{{ old('bl_no') ?? $order->bl_no}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('bl_no') }}</small>
         </div>

        <div class="form-group">
            <label for="invoice_no">Numéro de Facture</label>
            <input type="text" name="invoice_no" value="{{ old('invoice_no') ?? $order->invoice_no}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('invoice_no') }}</small>
         </div>

        <div class="form-group">
            <label for="comments">Informations</label>
            <textarea class="form-control" name="comments" id="comments">{{ $order->comments }}</textarea>
            <p class="text-muted"> {{ $errors->first('comments') }} </p>
        </div>
@csrf
