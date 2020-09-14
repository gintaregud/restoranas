\$table->id();

            $table->string('title');

            $table->integer('customers');

            $table->bigInteger('menus_id')->unsigned();

            $table->timestamps();
            $table->foreign('menus_id')->references('id')->on('menuses')->onDelete('cascade');

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
