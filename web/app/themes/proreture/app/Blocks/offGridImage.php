<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class OffGridImage extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Off Grid Image', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'off-grid-image';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Off Grid Image block.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'formatting';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'editor-ul';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = [];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = [];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'preview';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
            'align' => true,
            'align_text' => false,
            'align_content' => false,
            'full_height' => false,
            'anchor' => false,
            'mode' => false,
            'multiple' => true,
            'jsx' => true,
        ];

        /**
         * The block styles.
         *
         * @var array
         */
        $this->styles = [
            [
                'name' => 'light',
                'label' => 'Light',
                'isDefault' => true,
            ],
            [
                'name' => 'dark',
                'label' => 'Dark',
            ]
        ];

        /**
         * The block preview example data.
         *
         * @var array
         */
        $this->example = [
           'image' => 'url',
           'text' => 'example text'
        ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'image' => $this->offGridImage(),
            'text'  => $this->text()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $offGridImage = new FieldsBuilder('off_grid_image');

        $offGridImage
            ->addWysiwyg('text')
            ->addImage('OffGridImage', [
                'label' => 'Off Grid Image',
                'return_format' => 'id', // Make sure ACF returns the attachment ID
            ]);


        return $offGridImage->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function offGridImage()
    {
        $attachmentId = get_field('OffGridImage');

        if ($attachmentId) {
            $image = wp_get_attachment_image(
                $attachmentId,
                'full', // Full-size image
                false,
                [
                    'class' => 'w-full', // Add a class for styling
                ]
            );

            return $image;
        }

        return ''; // Return an empty string if there's no image.
    }
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
