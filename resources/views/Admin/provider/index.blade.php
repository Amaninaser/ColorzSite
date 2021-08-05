<!DOCTYPE dir='rtl' lang='ar'>
<html>

<head>
  <title>صفحة ألمزود</title>
</head>

<body>
  <div class="col-md-6">
    <p><a href="{{route('admin.company.index')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">عن الشركة</a></p>
    <p><a href="{{route('admin.service.index')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">إضافة خدمات</a></p>

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
              <h4><i class="fa fa-angle-right"></i>بياناتي الشخصية</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th> #رقم</th>
                      <th>إسم المستخدم</th>
                      <th>إسم المزود</th>
                      <th>الإيميل</th>
                      <th>البلدة</th>
                      <th>رقم الهاتف</th>
                      <th>رقم الفاكس</th>

                      <th>تعديل</th>
                      <th>حذف</th>

                    </tr>
                  </thead>

                  <tbody>
                    @if($user->id === Auth::user()->id)
                    @foreach($user as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                  
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->providername }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->town }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->faxno }}</td>

                      <td>
                        <div>
                          <img src="{{ $user->image_url }}" height="80" alt="">

                        </div>
                      </td>

                      <td>{{ $user->no_of_messages }}</td>
                      <td>{{ $user->free_text }}</td>


                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.user.edit',$user->id) }}">تعديل</a>
                      </td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.user.destroy',$user->id) }}">حذف</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
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