@extends('common.header')
@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            DataTables
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="icon-table"></i>DataTable with Sorting
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                    <th class="check-header hidden-xs">
                      <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                    </th>
                    <th>
                      First Name
                    </th>
                    <th>
                      Last Name
                    </th>
                    <th class="hidden-xs">
                      Email
                    </th>
                    <th class="hidden-xs">
                      Date Added
                    </th>
                    <th class="hidden-xs">
                      Status
                    </th>
                    <th></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        Robert
                      </td>
                      <td>
                        Kelso
                      </td>
                      <td class="hidden-xs">
                        robert@gmail.com
                      </td>
                      <td class="hidden-xs">
                        8-15-2013
                      </td>
                      <td class="hidden-xs">
                        <span class="label label-success">Approved</span>
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="#"><i class="icon-eye-open"></i></a><a class="table-actions" href="#"><i class="icon-pencil"></i></a><a class="table-actions" href="#"><i class="icon-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
                <div class="dataTables_paginate paging_full_numbers" id="dataTable1_paginate">
                  <!-- 首页 -->
                  <a onclick="page(1)" tabindex="0" class="first paginate_button" id="dataTable1_first">First</a>

                  <!-- 上一页 -->
                  <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="dataTable1_previous">Previous</a>
                  <span>
                    <a tabindex="0" class="paginate_active">1</a>
                  </span>
                  <!-- 下一页 -->
                  <a tabindex="0" class="next paginate_button paginate_button_disabled" id="dataTable1_next">Next</a>
                  <!-- 最后一夜 -->
                  <a tabindex="0" class="last paginate_button paginate_button_disabled" id="dataTable1_last">Last</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          function page(page){
            alert(page);
          }
          // $.ajax({
          //   type:"post",
          //   data:
          // })
        </script>


        <!-- end DataTables Example -->
      </div>
    </div>
  </body>

@endsection