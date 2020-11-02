install:
		composer install


brain-calc:
		php bin/brain-calc

brain-even:
		php bin/brain-even

validate:
		composer validate

lint:
		composer run-script phpcs -- --standard=PSR12 src bin
