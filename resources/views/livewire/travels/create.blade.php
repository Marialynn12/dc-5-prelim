<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add new Travel Destination</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Destination name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='cost'>
             <label for="cost">Cost</label>
             @error('cost')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="destination" class="form-select" wire:model.defer='destination'>
             <option hidden="true">Select destination</option>
             <option selected disabled>Select destination</option>
             <option value="USA">USA</option>
             <option value="Russia">Russia</option>
             <option value="Korea">Korea</option>
             <option value="UK">UK</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addFood()'>
                 Save
             </button>
          </div>
     </div>
    </div>
 </div>
