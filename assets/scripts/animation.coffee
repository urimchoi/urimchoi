	
w = $(window).height()
wt = $(window).scrollTop()
wb = wt + w

elInView = ($el, offset)->
	return $el.offset().top + offset < wb

loadAnimation = ($el, cssClass, offset)->
	$el.each(->
		if(elInView($(@), 100)) 
			$(@).addClass(cssClass)
		)

lazyLoadCheck = ($el)->
	$el.each(->
		if(elInView($(@), -200))
			$(@).trigger('scroll.lazyLoad')
		)

lazyLoad = ($el)->
	$el.each(->
		$(@).one(
			'scroll.lazyLoad'
			->
				src = $(@).attr('data-src')
				$(@).attr('src', src).css(
					'height': 'auto'
					'background': 'transparent'
					)
				console.log($(@))
			)
		)

linkDelay = ->
	$('a:not(.social-icon-circle, .button, .external-link)').each(->
		$(@).on('click', ->
			that = $(@)
			event.preventDefault()
			$('body').fadeOut()
			setTimeout(
        		->
        			window.location.href = that.attr('href')
        		500
        		)
			)
		)

clickAnimation = ->
	$('#work').on('click', '.work-block', ->
		$('.work-block-wrapper').each(->
			that = $(@)
			$(@).children($('.work-block')).addClass('anim-flash')
			setTimeout(
				->	
					console.log(that)
					that.removeClass('anim-slideup anim-slideup-init').addClass('anim-slideleftout-'+that.index())
					$('body').fadeOut()
				100
				)
			)
		dest = $(@).attr('data-href')
		if (typeof(dest) != "undefined" && dest != "")
        	setTimeout(
        		->
        			window.location.href = dest
        		600
        		)
#		$.ajax(
#			url: 'work/hopepcsd'
#			beforeSend: ->
#				console.log('beforesend')
#			success: (result)->
#				console.log(result)
#				$('.work-block-wrapper').remove()
#				$('.work-container').append(result)
#			)
		)


navLoadIn = ->
	$elDesktop = $('nav#desktop-nav')
	if(wt > 100)
		$elDesktop.removeClass('nav-hide').addClass('nav-reveal')
	else if(wt < 100 && $elDesktop.hasClass('nav-reveal'))
		$elDesktop.removeClass('nav-reveal').addClass('nav-hide')
	else
		false

navMobileLoadIn = ->
	$elMobile = $('.nav-button')
	$elMobile.click(->
		console.log('click')
		$('.mobile-menu').slideToggle()
		)

$(document).ready(->
	clickAnimation()
	lazyLoad($('.screenshot'))
	linkDelay()
	navMobileLoadIn()
	)

$(document).scroll(->
	w = $(window).height()
	wt = $(window).scrollTop()
	wb = wt + w

	loadAnimation($('.anim-slideup-init'), 'anim-slideup')
	loadAnimation($('.anim-slideright-init'), 'anim-slideright')

	lazyLoadCheck($('.screenshot'))
	loadAnimation($('.figure'), 'anim-fadein')

	navLoadIn()

	)



