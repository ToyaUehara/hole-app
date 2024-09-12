<x-app-layout>
  <x-slot name="header">
    　ホール口コミ
  </x-slot>
  <h1>口コミ作成</h1>
  <form action="/posts" method="POST">
    @csrf
    <input type="hidden" name="post[user_id]" value="{{ Auth::id() }}" />
    <input type="hidden" name="post[hole_id]" value="{{ $hole->id }}" />
    <div class="body">
      <h2>Body</h2>
      <textarea name="post[body]" placeholder="投稿ありがとうございます。"></textarea>
    </div>
    <div class="evaluation">
      <h2>評価</h2>
      <select name="post[evaluation]">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
     </select>
    </div>
    <input type="submit" value="store"/>
  </form>
  <div class="footer">
    <a href="/holes">戻る</a>
  </div>
</x-app-layout>