<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coding Cab</title>

        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <div class="top-right links">
                <a href="{{ url('/') }}">Home</a>
            </div>
            <section class="resume-section p-4 p-lg-5 text-center" id="contact">
                    <div class="my-auto">
                      <h2 class="mb-4 sec">Contact</h2>


                      <form
                        class="contact-form d-flex flex-column align-items-center"
                        action="/contact"
                        method="POST"
                      >
                        <div class="form-group w-75">
                          <input
                            type="name"
                            class="form-control"
                            placeholder="Name"
                            name="name"
                            required
                          />
                        </div>
                        <div class="form-group w-75">
                          <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            name="name"
                            required
                          />
                        </div>

                        <div class="form-group w-75">
                          <textarea
                            class="form-control"
                            type="text"
                            placeholder="Message"
                            rows="7"
                            name="name"
                            required
                          ></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit btn-info w-75 btn-dark">Submit</button>
                      </form>
                    </div>
                  </section>
    </body>
</html>

