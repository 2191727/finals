#Torio, Ralph Jufred P. 
# This are the models from the database that get by typing terminal command "python manage.py inspectdb > models.py"

from django.db import models


class AuthGroup(models.Model):
    name = models.CharField(unique=True, max_length=150)

    class Meta:
        managed = False
        db_table = 'auth_group'


class AuthGroupPermissions(models.Model):
    id = models.BigAutoField(primary_key=True)
    group = models.ForeignKey(AuthGroup, models.DO_NOTHING)
    permission = models.ForeignKey('AuthPermission', models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'auth_group_permissions'
        unique_together = (('group', 'permission'),)


class AuthPermission(models.Model):
    name = models.CharField(max_length=255)
    content_type = models.ForeignKey('DjangoContentType', models.DO_NOTHING)
    codename = models.CharField(max_length=100)

    class Meta:
        managed = False
        db_table = 'auth_permission'
        unique_together = (('content_type', 'codename'),)


class AuthUser(models.Model):
    password = models.CharField(max_length=128)
    last_login = models.DateTimeField(blank=True, null=True)
    is_superuser = models.IntegerField()
    username = models.CharField(unique=True, max_length=150)
    first_name = models.CharField(max_length=150)
    last_name = models.CharField(max_length=150)
    email = models.CharField(max_length=254)
    is_staff = models.IntegerField()
    is_active = models.IntegerField()
    date_joined = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'auth_user'


class AuthUserGroups(models.Model):
    id = models.BigAutoField(primary_key=True)
    user = models.ForeignKey(AuthUser, models.DO_NOTHING)
    group = models.ForeignKey(AuthGroup, models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'auth_user_groups'
        unique_together = (('user', 'group'),)


class AuthUserUserPermissions(models.Model):
    id = models.BigAutoField(primary_key=True)
    user = models.ForeignKey(AuthUser, models.DO_NOTHING)
    permission = models.ForeignKey(AuthPermission, models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'auth_user_user_permissions'
        unique_together = (('user', 'permission'),)


class CourseTable(models.Model):
    course_id = models.AutoField(primary_key=True)
    course_name = models.CharField(max_length=1000)
    course_date_created = models.DateTimeField()
    
# the funtion __str__(self): will return the course names available from the DB.
#tihs will be used during the addition of another exam and the same as the others below.

    def __str__(self):
        return self.course_name
    
    class Meta:
        managed = False
        db_table = 'course_table'
        

class DjangoAdminLog(models.Model):
    action_time = models.DateTimeField()
    object_id = models.TextField(blank=True, null=True)
    object_repr = models.CharField(max_length=200)
    action_flag = models.PositiveSmallIntegerField()
    change_message = models.TextField()
    content_type = models.ForeignKey('DjangoContentType', models.DO_NOTHING, blank=True, null=True)
    user = models.ForeignKey(AuthUser, models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'django_admin_log'


class DjangoContentType(models.Model):
    app_label = models.CharField(max_length=100)
    model = models.CharField(max_length=100)

    class Meta:
        managed = False
        db_table = 'django_content_type'
        unique_together = (('app_label', 'model'),)


class DjangoMigrations(models.Model):
    id = models.BigAutoField(primary_key=True)
    app = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    applied = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'django_migrations'


class DjangoSession(models.Model):
    session_key = models.CharField(primary_key=True, max_length=40)
    session_data = models.TextField()
    expire_date = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'django_session'


class ExamLog(models.Model):
    answer_id = models.AutoField(primary_key=True)
    student = models.ForeignKey('StudentAccount', models.DO_NOTHING)
    exam = models.ForeignKey('ExamTable', models.DO_NOTHING)
    question = models.ForeignKey('QuestionTable', models.DO_NOTHING)
    answer = models.CharField(max_length=1000)
    answer_status = models.CharField(max_length=1000)
    answer_date = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'exam_log'


class ExamTable(models.Model):
    exam_id = models.AutoField(primary_key=True)
    course = models.ForeignKey(CourseTable, models.DO_NOTHING)
    exam_title = models.CharField(max_length=1000)
    time_limit = models.CharField(max_length=1000)
    question_limit = models.IntegerField()
    exam_description = models.CharField(max_length=1000)
    date_created = models.DateTimeField()

    def __str__(self):
        return self.exam_title

    class Meta:
        managed = False
        db_table = 'exam_table'


class QuestionTable(models.Model):
    question_id = models.AutoField(primary_key=True)
    exam = models.ForeignKey(ExamTable, models.DO_NOTHING)
    question = models.CharField(max_length=1000)
    choice1 = models.CharField(max_length=1000)
    choice2 = models.CharField(max_length=1000)
    choice3 = models.CharField(max_length=1000)
    choice4 = models.CharField(max_length=1000)
    answer = models.CharField(max_length=1000)
    exam_status = models.CharField(max_length=1000)

    class Meta:
        managed = False
        db_table = 'question_table'


class StudentAccount(models.Model):
    student_id = models.AutoField(primary_key=True)
    student_name = models.CharField(max_length=1000)
    student_course = models.CharField(max_length=1000)
    student_gender = models.CharField(max_length=1000)
    student_birthdate = models.CharField(max_length=1000)
    student_level = models.CharField(max_length=1000)
    student_email = models.CharField(max_length=1000)
    student_password = models.CharField(max_length=1000)
    student_status = models.CharField(max_length=1000)

    class Meta:
        managed = False
        db_table = 'student_account'


class TeacherAccount(models.Model):
    teacher_id = models.AutoField(primary_key=True)
    teacher_username = models.CharField(max_length=1000)
    teacher_password = models.CharField(max_length=1000)

    class Meta:
        managed = False
        db_table = 'teacher_account'
