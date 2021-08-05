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
                      <th>الاسم كاملا</th>
                      <th>اسم المستخدم</th>
                      <th>الايميل</th>
                      <th>رقم الهاتف</th>
                      <th>عنوان السكن</th>


                      <th>تعديل</th>
                      <th>حذف</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->fullname }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->phone }}</td>


                      <td>{{ $user->address }}</td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.user.edit',$user->id) }}">تعديل</a>
                      </td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.user.destroy',$user->id) }}">حذف</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>

      </section>
      <!-- /wrapper -->
    </section>

  </section>
</body>

</html>