<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    private static $course, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'img/course-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCourse($request)
    {
        self::$course = new Course();
        self::$course->course_name = $request->course_name;
        self::$course->teacher_name = $request->teacher_name ;
        self::$course->course_fee = $request->course_fee;
        self::$course->duration = $request->duration;
        self::$course->date = $request->date;
        self::$course->objective = $request->objective;
        self::$course->detail = $request->detail;
        self::$course->image = self::getImageUrl($request);
        self::$course->save();
    }

    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::$course->course_name = $request->course_name;
        self::$course->teacher_name = $request->teacher_name ;
        self::$course->course_fee = $request->course_fee;
        self::$course->duration = $request->duration;
        self::$course->date = $request->date;
        self::$course->objective = $request->objective;
        self::$course->detail = $request->detail;
        self::$course->image = self::$imageUrl;
        self::$course->save();
    }
}
