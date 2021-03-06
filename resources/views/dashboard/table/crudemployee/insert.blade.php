@extends('layouts.dashboardstructure')

@section('title','Table')

@section('content')


        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>ເພີ່ມພະນັກງານ</h4>
                  </div>
                  <div class="card-body">
                   <form action="{{url('/form.insert')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-row">
                            <div class="col">
                            <label for="name" class="col-black">ຊື່</label>
                            <input type="text" class="form-control" name="name" placeholder="ກະລຸນາປ້ອນຊື່">
                            </div>
                            <div class="col">
                            <label for="surname" class="col-black">ນາມສະກຸນ</label>
                            <input type="text"  class="form-control" name="surname" placeholder="ກະລຸນາປ້ອນນາມສະກຸນ">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                        <label for="gender">ເພດ</label>   
                             <div class="form-check">
                            <label class="form-check-label" for="male">ຊາຍ</label>
                            <input type="radio" class="form-check-input" name="gender" id="male" value="ຊາຍ">
                            </div>

                            <div class="form-check">
                            <label class="form-check-label" for="female">ຍິງ</label>
                            <input type="radio" class="form-check-input" name="gender" id="female" value="ຍິງ">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="date_of_birth">ວ/ດ/ປ ເກີດ</label>
                        <input type="date" class="form-control" name="date_of_birth">
                        </div>
                        <div class="form-row">
                            <div class="col">
                            <label for="past_village"  class="col-black">ບ້ານເກີດ</label>
                            <input type="text" name="past_village" class="form-control " placeholder="ກະລຸນາປ້ອນບ້ານເກີດ">
                            </div>
                            <div class="col">
                            <label for="past_city" class="col-black">ເມືອງ</label>
                            <input type="text" class="form-control" name="past_city" placeholder="ກະລຸນາປ້ອນເມືອງ">
                            </div>
                            <div class="col">
                            <label for="past_province" class="col-black">ແຂວງ</label>
                            <input type="text" class="form-control" name="past_province" placeholder="ກະລຸນາປ້ອນແຂວງ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="current_village"  class="col-black">ບ້ານຢູ່ປັດຈຸບັນ</label>
                            <input type="text" name="current_village" class="form-control " placeholder="ກະລຸນາປ້ອນບ້ານປັດຈຸບັນ">
                            </div>
                            <div class="col">
                            <label for="current_city" class="col-black">ເມືອງ</label>
                            <input type="text" class="form-control" name="current_city" placeholder="ກະລຸນາປ້ອນເມືອງ">
                            </div>
                            <div class="col">
                            <label for="current_province" class="col-black">ແຂວງ</label>
                            <input type="text" class="form-control" name="current_province" placeholder="ກະລຸນາປ້ອນແຂວງ">
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                        <label for="tel">ເບີໂທ</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                 <div class="input-group-text">
                                 <i class="fas fa-phone"></i>
                                 </div>
                              </div>
                        <input type="text" onkeypress="return isNumber(event)" name="tel" class="form-control" placeholder="ກະລຸນາປ້ອນເບີໂທ"> 
                            </div>
                         </div>

                         
                        <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                        <a href="{{route('employee')}}" class="btn btn-danger">ຍົກເລີກ</a>
                        <button type="reset" class="btn btn-secondary">ລ້າງ</button>
                   </form>
                   
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </section>

@endsection

@section('script')
<script>
function isNumber(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }
        </script>
@endsection