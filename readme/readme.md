### 2019/12/1 对接七牛云存储
> 简要说明:涉及核心类:UploadFileController,CourseSetFileManageController
   
> 涉及功能点:
* 文件上传:UploadFileController:uploadAction
* 文件删除:/course_set/{id}/manage/delete/materials.CourseSetFileManageController:deleteCourseFilesAction
* 文件下载:UploadFileController:downloadAction
* 视频查看:PlayerController:showAction
* 文件上传初始化:UploaderController:initAction  这里主要是在上传之前把文件信息等存入表.例如文件名,文件hashId,文件大小,文件保存位置.
* 文件上传成功校验:UploaderController:finishedAction 这里主要是修改upload_files:status字段为'ok'
* 新增文件上传核心类 QiNiuUtil
> 涉及表
*  edusoho.upload_files 文件上传表
*  edusoho.course_v8 课程表
*  edusoho.course_material_v8 课程:课时的材料表

> 涉及JS
* UploaderChooser.js
<br>

    