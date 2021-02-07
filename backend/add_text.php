<fieldset>
  <legend>新增文章</legend>
  <form>
    <table>
      <tr>
        <td>文章標題</td>
        <td><input type="text" name="txt_title" id="txt_title"></td>
      </tr>
      <tr>
        <td>文章分類</td>
        <td>
            <select id="type">
            <option selected="selected" value="1">健康新知</option>
            <option value="2">菸害防制</option>
            <option value="3">癌症防治</option>
            <option value="4">慢性病防治</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>文章內容</td>
        <td><textarea name="text" id="text" cols="80" rows="10"></textarea></td>
      </tr>
      <tr>
        <td><input type="button" value="新增" onclick="add_text()"><input type="reset" value="重置"></td>
      </tr>
    </table>
  </form>
</fieldset>

<script>
function add_text(){
  let txt_title=$("#txt_title").val()
  let type=$("#type").val()
  let text=$("#text").val()
  console.log(txt_title,type,text)

  if(title=="" || text==""){
    alert("不可空白")
  }else{
    $.post("api/add_text.php",{txt_title,type,text},function(res){
      console.log(res)
      alert("新增完成")
    })
  }

}
</script>