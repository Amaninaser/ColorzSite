<!DOCTYPE dir='rtl' lang='ar'>
<html>

<head>
  <title>صفحة المستخدم</title>
</head>

<body>
<x-jet-validation-errors class="mb-4" />

  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <div>
    @if (session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
  </div>

        <form method="POST" action="{{route('admin.usercenter.store')}}">
          @csrf

          
          <div>
            <x-jet-label for="centername" value="{{ __('إسم المدرسة') }}" />
            <x-jet-input id="centername" class="block mt-1 w-full" type="text" name="centername" :value="old('centername')" required autofocus autocomplete="centername" />
          </div>

          <div class="mt-4">
            <x-jet-label for="email" value="{{ __('الإيميل') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
          </div>

         

          <div>
            <x-jet-label for="phone" value="{{ __('رقم الهاتق') }}" />
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
          </div>

          <div>
            <x-jet-label for="no_of_finish_room" value="{{ __('عدد الغرف المجهزة') }}" />
            <x-jet-input id="no_of_finish_room" class="block mt-1 w-full" type="text" name="no_of_finish_room" :value="old('no_of_finish_room')" required autofocus autocomplete="no_of_finish_room" />
          </div>


          <div>
            <x-jet-label for="no_of_student" value="{{ __('عدد الطلاب في المدرسة') }}" />
            <x-jet-input id="no_of_student" class="block mt-1 w-full" type="text" name="no_of_student" :value="old('no_of_student')" required autofocus autocomplete="no_of_student" />
          </div>

          <div class="flex items-center justify-end mt-4">


            <x-jet-button class="ml-4">
              {{ __('حفظ البيانات') }}
            </x-jet-button>
          </div>
        </form>

      </div>
    </div>
  </div>

</body>

</html>