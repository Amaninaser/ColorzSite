<!DOCTYPE  dir='rtl' lang='ar'>
<html>
<head>
    <title>صفحة البلدية</title>
</head>
<body>



<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
    <!-- @if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif -->

      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="{{route('admin.municipal.store')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group mb-3">
            <label for="district" class="control-label col-lg-2"> اللواء:</label>
            <div class="col-lg-10">
              <input type="text" name="district" class="form-control @error('district') is-invaild  @enderror">
              @error('district')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="municipality" class="control-label col-lg-2"> البلدية:</label>
            <div class="col-lg-10">
              <input type="text" name="municipality" class="form-control @error('municipality') is-invaild  @enderror">
              @error('municipality')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="town" class="control-label col-lg-2"> البلدة:</label>
            <div class="col-lg-10">
              <input type="text" name="town" class="form-control @error('town') is-invaild  @enderror">
              @error('town')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="population" class="control-label col-lg-2"> عدد السكان:</label>
            <div class="col-lg-10">
              <input type="text" name="population" class="form-control @error('population') is-invaild  @enderror">
              @error('population')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="image" class="control-label col-lg-2"> الشعار:</label>

            <div class="col-lg-10">
              <div style="padding-bottom: 10px !important;">
                <img src="{{ $municipal->image_url }}" height="100" alt="">
              </div>

              <input type="file" name="image" class="form-control @error('image') is-invaild  @enderror" value="{{ old('image', $municipal->image) }}">
              @error('image')
              <p class="invaild-feedback text-red">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="no_of_messages" class="control-label col-lg-2">المتبقية sms عدد رسائل  :</label>
            <div class="col-lg-10">
              <input type="text" name="no_of_messages" class="form-control @error('no_of_messages') is-invaild  @enderror">
              @error('no_of_messages')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="form-group mb-3">
            <label for="free_text" class="control-label col-lg-2">  عن البلدية :</label>
            <div class="col-lg-10">
              <textarea type="text" name="free_text" class="form-control @error('free_text') is-invaild  @enderror"></textarea>
              @error('free_text')
              <p class="invaild-feedback">{{ $message }}</p>
              @enderror
            </div>

          </div>








          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-theme" type="submit">حفظ البيانات</button>
              <button class="btn btn-theme04" type="button">إلغاء</button>
            </div>
          </div>

        </form>
      </div>
    </div>
    <!-- /form-panel -->
  </div>
  <!-- /col-lg-12 -->
</div></body>
</html>