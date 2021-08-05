<!DOCTYPE dir='rtl' lang='ar'>
<html>

<head>
  <title>صفحة إنشاء المستخدمين</title>
</head>

<body>
  <div class="row">
    <div class="col-md-6">
      <p><a href="{{route('admin.user.create')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">إضافة مستخدم</a></p>
    </div>
    <div class="col-md-6">
      <p><a href="{{route('admin.usercenter.create')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">إضافة مركز</a></p>
    </div>
  </div>

  <div>
    @if (session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
  </div>

  <section class="probootstrap-section" style="padding-bottom: 5px !important;">

    <section>

      <section class="">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>كل مستخدمي النظام</h4>
            
              <div class="row">
                <div class="col-md-6">
                  <p><a href="{{route('admin.user.index')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">بيانات جميع المستخدمين </a></p>
                </div>
                <div class="col-md-6">
                  <p><a href="{{route('admin.usercenter.index')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">بيانات جميع المراكز</a></p>
                </div>
              </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                      <th> #رقم</th>
                      <th>الاسم المدرسة</th>
                      <th>الايميل</th>
                      <th>رقم الهاتف</th>
                      <th>عدد الغرف المجهزة</th>
                      <th>عدد الطلاب في المدرسة</th>


                      <th>تعديل</th>
                      <th>حذف</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($user_centers as $user_center)
                    <tr>
              
                      <td>{{ $user_center->id }}</td>
                      <td>{{ $user_center->centername }}</td>
                      <td>{{ $user_center->email }}</td>
                      <td>{{ $user_center->phone }}</td>
                      <td>{{ $user_center->no_of_finish_room }}</td>
                      <td>{{ $user_center->no_of_student }}</td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.usercenter.edit',$user_center->id) }}">تعديل</a>
                      </td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.usercenter.destroy',$user_center->id) }}">حذف</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </section>
            </div>                
          </div>
        </div>

      </section>
    </section>
  </section>
</body>

</html>