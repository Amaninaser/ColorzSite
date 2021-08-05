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

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div>
            <x-jet-label for="fullname" value="{{ __('الإسم كاملا') }}" />
            <x-jet-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" />
          </div>
          <div>
            <x-jet-label for="name" value="{{ __('إسم المسخدم') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          </div>

          <div class="mt-4">
            <x-jet-label for="email" value="{{ __('الإيميل') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
          </div>

          <div class="mt-4">
            <x-jet-label for="password" value="{{ __('كلمة المرور') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          </div>

          <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمة المرور') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          </div>
          <div>
            <x-jet-label for="phone" value="{{ __('رقم الهاتق') }}" />
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
          </div>
          <div>
            <x-jet-label for="address" value="{{ __('عنوان السكن') }}" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
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