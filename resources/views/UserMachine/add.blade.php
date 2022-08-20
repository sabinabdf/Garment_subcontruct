
@extends('front.layout');
@section('content');
<section class="padd-top-80 padd-bot-60">
    <div class="container"> 
      <!-- row -->
      <div class="row">
        <div class="col-md-12 col-sm-7">
          <div class="detail-wrapper">
            <div class="detail-wrapper-body">
              <div class="row">


                    
                <form action="">

                  <table class="table table-bordered">
                    {{-- <tr>
                    <th>Sl</th>
                    <th>Company Id</th>
                    <th>Category Id</th>
                    <th>Machine Id</th>
                    <th>Title</th>
                    <th>Specifications</th>
                    <th>Number of Machines</th>
                    <th>Purchase Date</th>
                    <th>Photo</th>
                    <th>Number of Available</th>
                    <th>Brand</th>
                    <th>Status</th>
                    <th>Approval</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($data as $k=>$d)
                  <tr>
                    <td>{{++$k}}</td>
                    <td>{{$d->company_id}}</td>
                    <td>{{$d->category_id}}</td>
                    <td>{{$d->machine_id}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->spacifications}}</td>
                    <td>{{$d->number_of_machines}}</td>
                    <td>{{$d->purchase_date}}</td>
                    <td>{{$d->photo}}</td>
                    <td>{{$d->number_of_available}}</td>
                    <td>{{$d->brand}}</td>
                    <td>{{$d->status}}</td>
                    <td>{{$d->approval}}</td>
                    <td>
                      <a href="">Edit</a>
                      <a href="">Delete</a>
                    </td>
                  </tr>
                  @endforeach --}}
                  <tr>
                    <th>Company Id</th>
                    <th>

                        <select name="company_id">
                           <option value="">Select Company Name</option>
                            @foreach ($list as $l)
                            <option value="{{$l->id}}">{{$l->name}}</option>
                            @endforeach
                
                        </select>
                       </th>
                  </tr>
                  <tr>
                    <th>Category Id</th>
                    <th>

                        <select name="category_id">
                           <option value="">Select Company Name</option>
                            @foreach ($file as $f)
                            <option value="{{$f->id}}">{{$f->name}}</option>
                            @endforeach
                
                        </select>
                       </th>
                  </tr>

                  </table>

                </form>


                  
              </div>
            </div>
          </div>
          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Job Description</h4>
            </div>
            <div class="detail-wrapper-body">
              <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
            </div>
          </div>
          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Job Skill</h4>
            </div>
            <div class="detail-wrapper-body">
              <ul class="detail-list">
                <li>Contrary to popular belief, Lorem Ipsum is not simply random text </li>
                <li>Latin professor at Hampden-Sydney College in Virginia </li>
                <li>looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage ideas </li>
                <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced </li>
                <li>accompanied by English versions from the 1914 translation by H. Rackham </li>
              </ul>
            </div>
          </div>
          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Location</h4>
            </div>
            <div class="detail-wrapper-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Requirements</h4>
            </div>
            <div class="detail-wrapper-body">
              <ul class="detail-list">
                <li>There are many variations of passages of Lorem Ipsum available</li>
                <li>the majority have suffered alteration in some form slightly</li>
                <li>you need to be sure there isn't anything embarrassing hidden</li>
                <li>generators on the Internet tend to repeat predefined chunks as necessary</li>
                <li>making this the first true generator on the Internet It uses a dictionary</li>
                <li>Ability to solve problems creatively and effectively</li>
                <li>combined with a handful of model sentence structures</li>
                <li>standard chunk of Lorem Ipsum used since the 1500s is reproduced</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Sidebar -->
      
      </div>
      <!-- End Row --> 
     
    </div>
  </section>
  @endsection