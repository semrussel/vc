<div class="list-group">
    <a href="/services" class="list-group-item list-head">OUR SERVICES</a>
    
    <?php $main = DB::table('main_prod')->get(); ?>
    
    @foreach($main as $m)
        @if($m->is_subcat == 0)
            <?php $url = url('/services/main/'.$m->id); ?>
            <a href="{{ $url }}" class="list-group-item"><b>{{ $m->name }}</b></a>
        @else
            <?php $sub = DB::table('sub_prod')->where('main_id',$m->id)->get(); ?>
             <a class="list-group-item" data-remote="true" href="#sub-{{$m->id}}" id="cat-{{$m->id}}" data-toggle="collapse" data-parent="#sub-{{$m->id}}">
                <span><b>{{ $m->name }}</b></span>
                <span class="badge"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </a>
            <div class="collapse list-group-submenu" id="sub-{{$m->id}}">
            @foreach($sub as $s)
                <?php $url = url('/services/sub/'.$s->id); ?>
                <a href="{{ $url }}" class="list-group-item sub-item">{{ $s->name }}</a>
            @endforeach
            </div>
        @endif
    @endforeach

</div>

<p class="list-group-item list-head">CONTACT US</p>

<p class="list-group-item">
    <b>Business Hours</b><br>
    8:00AM - 8:15PM
</p>
<p class="list-group-item">
    <b>Main Address</b><br>
    301 Quirino Highway, Brgy. Baesa, Quezon City, Philippines
</p>
<p class="list-group-item">
    <b>Contact Number</b><br>
    0932 547 1020
</p>