<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogRequest;
    use App\Http\Requests\UpdateBlogRequest;
    use App\Models\Blog;

    class BlogController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            $blogs = Blog::all();

            return view('blogs.index', compact('blogs'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogRequest $request) {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function show(Blog $blog) {
            return view('blogs.single_blog', compact('blog'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateBlogRequest  $request
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateBlogRequest $request, Blog $blog) {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function destroy(Blog $blog) {
            //
        }
    }
