install:
		composer install

brain-prime:
		php bin/brain-prime

brain-progression:
		php bin/brain-progression

brain-gcd:
		php bin/brain-gcd

brain-calc:
		php bin/brain-calc

brain-even:
		php bin/brain-even

validate:
		composer validate

lint:
		composer run-script phpcs -- --standard=PSR12 src bin
