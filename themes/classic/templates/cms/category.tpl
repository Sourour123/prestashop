{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

{block name='page_title'}
    {$cms_category.name}
{/block}

{block name='page_content'}
    {block name='cms_sub_categories'}
        {if $sub_categories}
            <p>{l s='List of sub categories in %name%:' d='Shop.Theme.Global' sprintf=['%name%' => $cms_category.name]}</p>
            <ul>
                {foreach from=$sub_categories item=sub_category}
                    { <li><a href="{$sub_category.link}">{$sub_category.name}</a></li>}


                {/foreach}
            </ul>
        {/if}
    {/block}

    {block name='cms_sub_pages'}
        {if $cms_pages}
            <p>{l s='List of pages in %category_name%:' d='Shop.Theme.Global' sprintf=['%category_name%' => $cms_category.name]}</p>
            <ul>
                {foreach from=$cms_pages item=cms_page}
                    {*  <li><a href="{$cms_page.link}">{$cms_page.meta_title}</a></li>*}
                    {if $cms_category.id ==2}
                        {*category_blog*}
                        <li class="li-category-blog">
                            <a href="{$cms_page.link}" class="title">{$cms_page.meta_title}</a>
                            {assign var="img_cms" value="img/cms/{$cms_page.id_cms}.jpg"}
                            {if file_exists($img_cms)}
                                <div col sm-6 id="banner_cms">
                                    {assign var="cut_to" value="{$cms_page.content|strpos:'<!--more-->'}"}
                                    <a href="{$cms_page.link}" class="title">
                                        <img id="test" src="{$urls.base_url}/img/cms/{$cms_page.id_cms}.jpg" alt="{$cms_page.meta_title}"
                                            title="{$cms_page.meta_title}" style="width:40%;height: 30%;" />
                                    </a>
                                </div>
                            {/if}
                            {$cms_page.content|substr:0:$cut_to nofilter}
                            <span><a href="{$cms_page.link}" class="button btn btn-primary">{l s='lire la suite'}</a></span>
                        </li>
                    {else}
                        <li>
                            <a href="{$cms_page.link}">{$cms_page.meta_title}{$cms_page.meta_title}</a><br>
                        </li>
                    {/if}
                {/foreach}
            </ul>
        {/if}
    {/block}
{/block}