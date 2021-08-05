<!DOCTYPE dir='rtl' lang='ar'>
<html>

<head>
  <title>صفحة البلدية</title>
</head>

<body>
  <div class="col-md-6">
    <p><a href="{{route('admin.municipal.create')}}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">إضافة</a></p>
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
              <h4><i class="fa fa-angle-right"></i>كل البلديات</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th> #رقم</th>
                      <th>اللواء</th>
                      <th>البلدية</th>
                      <th>البلدة</th>
                      <th>عدد السكان</th>
                      <th>الشعار</th>
                      <th>عدد الرسائل المتبقية</th>
                      <th>عن البلدية</th>

                      <th>تعديل</th>
                      <th>حذف</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($municipals as $municipal)
                    <tr>
                      <td>{{ $municipal->id }}</td>
                      <td>{{ $municipal->district }}</td>
                      <td>{{ $municipal->municipality }}</td>
                      <td>{{ $municipal->town }}</td>
                      <td>{{ $municipal->population }}</td>

                      <td>
                        <div>
                          <img src="{{ $municipal->image_url }}" height="80" alt="">

                        </div>
                      </td>

                      <td>{{ $municipal->no_of_messages }}</td>
                      <td>{{ $municipal->free_text }}</td>


                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.municipal.edit',$municipal->id) }}">تعديل</a>
                      </td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.municipal.destroy',$municipal->id) }}">حذف</a>
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