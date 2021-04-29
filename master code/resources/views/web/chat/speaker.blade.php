<div class="img_cont">
    <img src="{{ url('/storage/uploades/imageProfile') }}/{{ $user->image }}" class="rounded-circle user_img">
    {{-- <span class="online_icon"></span> --}}
</div>
<div class="user_info">
    <span>{{ $user->first_name }} {{ $user->last_name }}</span>
    <p>{{ count($messages) }} Messages</p>
</div>



<div class="video_cam">
    <span><i class="fas fa-video"></i></span>
    <span><i class="fas fa-phone"></i></span>
</div>
