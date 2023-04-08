 <div id="side-bar">
   <div id="confirm">
     <p>{{ session('username') }}さんの</p>
     <div>
       <p>フォロー数</p>
       @if(Request::path() === 'top')
       <!-- <p>{{ $followerCount }}名</p> -->
       <p>0名</p>
       @else
       <p>0名</p>
       @endif
     </div>
     <p class="btn"><a href="">フォローリスト</a></p>
     <div>
       <p>フォロワー数</p>
       <p>〇〇名</p>
     </div>
     <p class="btn"><a href="">フォロワーリスト</a></p>
   </div>
   <p class="btn"><a href="{{ route('search') }}">ユーザー検索</a></p>
 </div>
